<?php


$url = "https://rest.coinapi.io/v1/exchangerate/XRP/BTC?apikey=3F4FD663-D169-472C-BF60-A766140D03E6";


$dane_json = file_get_contents($url);
$dane_tablica = json_decode($dane_json, true);

$trimmed = substr($dane_tablica['rate'], 0, -2);

echo $trimmed;

?>





