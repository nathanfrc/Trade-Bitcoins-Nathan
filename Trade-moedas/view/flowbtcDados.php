
//String no formato JSON
/*
$string_json = 'https://api.flowbtc.com:8405/GetTicker/BTCBRL/';

 $json = file_get_contents($string_json);

//Decodificação pela função json_decode
$objeto_php = json_decode($json);

//Manipulando o objeto decodificado
echo "high: ".$objeto_php->high;
echo "<br />";
echo "last: ".$objeto_php->last; */


<?php
$homepage = file_get_contents('https://biscoint.io/bitcoin/price-comparison/buy/single-exchange');
echo $homepage;
?>





