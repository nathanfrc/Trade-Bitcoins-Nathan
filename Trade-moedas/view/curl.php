<?php

$moeda = "BRL";
$valor = 500;


$ch = curl_init();
// informar URL e outras funções ao CURL
curl_setopt($ch, CURLOPT_URL, "https://blockchain.info/tobtc?currency=".$moeda."&value=".$valor);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Acessar a URL e retornar a saída
$output = curl_exec($ch);
// liberar
curl_close($ch);
// Substituir ‘Google’ por ‘PHP Curl’
$output = str_replace(‘Google’, ‘PHP’, $output);
// Imprimir a saída
echo $valor = $output;



echo "valor do btc é =".$valor;