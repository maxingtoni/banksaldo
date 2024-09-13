<?php declare(strict_types = 1);

require_once('Utility.php');



class Bankrekening
{
    /**
     * @var string
     */
    private string $rekeningnummer;
    
    /**
     * @var float
     */
    private float $saldo;

    /**
     * @param string $rekeningnummer
     */
    public function __construct(string $rekeningnummer) 
    {
        $this->rekeningnummer = $rekeningnummer;
        $this->saldo = 0.0;
    }

    /**
     * @return float
     */
    public function get_saldo(): float 
    {
        return $this->saldo;
    }

    /**
     * @param float $bedrag
     * @return void
     */
    public function stort(float $bedrag): void
    {
        $this->saldo += abs($bedrag);
    }

    /**
     * @param float $bedrag
     * @return void
     */
    public function opnemen(float $bedrag): void
    {
        $this->saldo -= abs($bedrag);
    }

    /**
     * @return void
     */
    public function toon_rekening_informatie(): void
    {
        echo "Rekeningnummer: '" . Utility::format_rekeningnummer($this->rekeningnummer) . "', saldo: " . Utility::format_euro($this->saldo) . "\n";
    }
}