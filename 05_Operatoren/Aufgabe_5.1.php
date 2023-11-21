<?php

$artikel1 = 22.5;
$artikel2 = 12.3;
$artikel3 = 5.2;

$summe = $artikel1 + $artikel2 + $artikel3;
$bruttosumme = $summe*1.19;

echo "Artikel 1: $artikel1 €<br>";
echo "Artikel 2: $artikel2 €<br>";
echo "Artikel 3: $artikel3 €<br><br>";

echo "Nettosumme: $summe €<br>";
echo "Umsatzsteuer: 19%<br>";
echo "Bruttosumme: $bruttosumme €";

?>