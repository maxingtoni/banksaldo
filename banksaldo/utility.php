<?php declare(strict_types=1);

class Utility
{
    /**
     * Formats an amount to euro
     * @param float $amount
     * @return string
     */
    public static function format_euro(float $amount): string
    {
        return "€" . number_format($amount, 2, ',', '.');
    }

    /**
     * Calculates the age based on the birthday date
     * @param string $birthday
     * @return int
     */
    public static function calculate_age(string $birthday): int
    {
        $today = new DateTime();
        $age = $today->diff(new DateTime($birthday));
        return $age->y;
    }

    /**
     * Generates a random rekeningnummer
     * @return string
     */
    public static function generate_rekeningnummer(): string
    {
        return "NL99" . "XXBR" . substr(str_shuffle('0123456789'), 0, 10);
    }

    /**
     * Formats a rekeningnummer to INGB type readable?
     * @param string $rekeningnummer
     * @return string
     */
    public static function format_rekeningnummer(string $rekeningnummer): string
    {
        return implode(' ', str_split($rekeningnummer, 4));
    }
}