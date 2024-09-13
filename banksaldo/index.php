<?php

require_once('Persoon.php');
require_once('Bankrekening.php');

require_once('Utility.php');



echo "<h1>Banksaldo OOP</h1><hr><pre>";
// initialize
$bankrekening = new Bankrekening(Utility::generate_rekeningnummer());
$persoon = new Persoon("Max Shirazi", Utility::calculate_age('2006-04-30'));
echo "\n- initial data\n";
$persoon->koppel_bankrekening($bankrekening);
$persoon->toon_informatie();

echo "\n- 10.000 gestort\n";
$bankrekening->stort(10000.0);
$persoon->toon_informatie();

echo "\n- 4 jaar later, 170.000 er af\n";
$bankrekening->opnemen(170000.0);
$persoon->set_leeftijd($persoon->get_leeftijd() + 4);
$persoon->toon_informatie();

echo "\n- 2 jaar later, 10 euro op een nieuwe bankrekening\n";
$bankrekening = new Bankrekening(Utility::generate_rekeningnummer());
$bankrekening->stort(10.0);
$persoon->set_leeftijd($persoon->get_leeftijd() + 2);
$persoon->koppel_bankrekening($bankrekening);
$persoon->toon_informatie();

echo "</pre>";