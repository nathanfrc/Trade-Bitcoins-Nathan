<?php

//Criando a url para o aquivo json
  $jsonurl = "https://www.mercadobitcoin.net/api/BTC/orderbook/";


$getarr=json_decode($jsonurl,true);
 foreach($getarr as $key => $value) { 
 if(is_array($value)) { // ID has an array so retrieve a value
  foreach($value as $key1 => $value1) { 
    echo $key."=>".$value1; } 
  }else { echo $key."=>".$value; } }








    ?>