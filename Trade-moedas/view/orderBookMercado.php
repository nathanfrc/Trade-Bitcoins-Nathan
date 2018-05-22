
<?php

$url="https://www.mercadobitcoin.net/api/BTC/orderbook/";

$json_file = file_get_contents($url);

 $json_str = json_decode($json_file, true);


 foreach ( $json_str as $e  ) 
 { 
     
        $teste = $e[[0]];

 }

echo $teste;

?>



