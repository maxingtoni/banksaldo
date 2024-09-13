<?php declare(strict_types = 1);

require_once('Bankrekening.php');
require_once('Utility.php');



class Persoon
{
    /**
     * @var string
     */
    private string $naam;
    
    /**
     * @var int
     */
    private int $leeftijd;
    
    /**
     * @var Bankrekening
     */
    private Bankrekening $bankrekening;

    /**
     * @param string $naam
     * @param int $leeftijd
     */
    public function __construct(string $naam, int $leeftijd)
    {
        $this->naam = $naam;
        $this->leeftijd = $leeftijd;
    }

    /**
     * @return string
     */
    public function get_naam(): string
    {
        return $this->naam;
    }

    /**
     * @return int
     */
    public function get_leeftijd(): int
    {
        return $this->leeftijd;
    }

    /**
     * @param int $leeftijd
     * @return void
     */
    public function set_leeftijd(int $leeftijd): void
    {
        $this->leeftijd = $leeftijd;
    }

    /**
     * @param Bankrekening $bankrekening
     * @return void
     */
    public function koppel_bankrekening(Bankrekening $bankrekening): void
    {
        $this->bankrekening = $bankrekening;
    }

    public function toon_informatie(): void
    {
        echo "Naam: " . $this->naam . ", leeftijd: " . $this->leeftijd . "\n";
        if (isset($this->bankrekening)) {
            $this->bankrekening->toon_rekening_informatie();
        }
    }
}