<?php
/**
 * Holiday handler: fetch hari libur nasional Indonesia dari Nager.Date API
 * dan cache hasilnya sebagai WordPress transient.
 *
 * File baru — letakkan di folder yang sama dengan class-wec-admin.php
 * Daftarkan di file plugin utama (misal wp-events-calendar.php) dengan:
 *   require_once plugin_dir_path(__FILE__) . 'includes/class-wec-holiday.php';
 */
class WEC_Holiday
{
    /** Endpoint Nager.Date — %d diisi tahun, ID = Indonesia */
    // const API_URL = 'https://date.nager.at/api/v3/PublicHolidays/%d/ID';
    const API_URL = 'https://libur.deno.dev/api?year=%d';

    /** Kunci transient WordPress — %d diisi tahun */
    const CACHE_KEY = 'wec_holidays_%d';

    /** Durasi cache: 1 bulan (hari libur nasional jarang berubah) */
    const CACHE_TTL = MONTH_IN_SECONDS;

    /**
     * Kembalikan array hari libur untuk tahun tertentu.
     * Gunakan cache transient bila ada, fetch dari API bila tidak.
     *
     * @param  int   $year  Tahun (misal 2025)
     * @return array        [ ['date'=>'YYYY-MM-DD','localName'=>'...','name'=>'...'], ... ]
     */
    public function get_holidays(int $year): array
    {
        $cache_key = sprintf(self::CACHE_KEY, $year);
        $cached = get_transient($cache_key);

        if ($cached !== false) {
            return $cached;
        }

        $response = wp_remote_get(
            sprintf(self::API_URL, $year),
            ['timeout' => 10]
        );

        if (is_wp_error($response)) {
            error_log('[WEC_Holiday] wp_remote_get error: ' . $response->get_error_message());
            return [];
        }

        if (wp_remote_retrieve_response_code($response) !== 200) {
            error_log('[WEC_Holiday] API returned non-200 for year ' . $year);
            return [];
        }

        $body = wp_remote_retrieve_body($response);
        $holidays = json_decode($body, true);

        if (!is_array($holidays)) {
            return [];
        }

        // Simpan hanya field yang dibutuhkan frontend agar payload kecil
        $clean = array_map(function ($h) {
            return [
                'date' => sanitize_text_field($h['date']),
                // 'localName' => sanitize_text_field($h['localName']),
                'localName' => sanitize_text_field($h['name']),
            ];
        }, $holidays);

        set_transient($cache_key, $clean, self::CACHE_TTL);

        return $clean;
    }

    /**
     * Hapus cache holiday untuk tahun tertentu (atau semua tahun bila $year = null).
     * Berguna bila admin ingin refresh manual.
     *
     * @param int|null $year
     */
    public function flush_cache(?int $year = null): void
    {
        if ($year !== null) {
            delete_transient(sprintf(self::CACHE_KEY, $year));
            return;
        }

        // Hapus untuk tahun sekarang ±2 (jangkauan navigasi kalender)
        $current = (int) date('Y');
        for ($y = $current - 1; $y <= $current + 2; $y++) {
            delete_transient(sprintf(self::CACHE_KEY, $y));
        }
    }

    /**
     * Daftarkan REST route GET /wec/v1/holidays?year=YYYY
     */
    public function register_routes(): void
    {
        register_rest_route('wec/v1', '/holidays', [
            'methods' => 'GET',
            'callback' => [$this, 'get_holidays_endpoint'],
            'permission_callback' => '__return_true',
            'args' => [
                'year' => [
                    'default' => (int) date('Y'),
                    'sanitize_callback' => 'absint',
                ],
            ],
        ]);
    }

    /**
     * Callback REST API — kembalikan array holidays untuk tahun tertentu.
     */
    public function get_holidays_endpoint(\WP_REST_Request $request): \WP_REST_Response
    {
        $year = (int) $request->get_param('year');
        $holidays = $this->get_holidays($year);
        return rest_ensure_response($holidays);
    }
}
