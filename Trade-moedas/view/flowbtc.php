<?php 



//Criando a url para o aquivo json
  $jsonurl ="https://api.flowbtc.com:8405/GetTicker/BTCBRL";
//$json = file_get_contents($jsonurl,0,null,null);
   
//var_dump(json_decode($json, true));
/*
    //Retorna o conteudo do arquivo em formato de string
  $json = file_get_contents($jsonurl,0,null,null);

    //Decodificando a string e criando o json
    $json_output = json_decode($json);

  //var_dump($json_output);
    //Loop para percorrer o json capturando os dados
    foreach ( $json_output->BTCUSD as $trend )
    {
    //maior preço 
      $trend->high;
    //Menor preço unitário de negociação das últimas 24 horas. 
    //Preço unitário da última negociação.
    echo $trend->last;

     echo $trend->low;

      echo $trend->ask;
    //Maior preço de oferta de compra das últimas 24 horas..
    echo $trend->volume;
    //Menor preço de oferta de venda das últimas 24 horas..
    echo $trend->bid;
    //Data e hora da informação em Era Unix.
    
   
    
    }



  
    echo  $last = $json_output->BTCUSD->last."</br>";
   echo   $high = $json_output->BTCUSD->high."</br>";
   echo   $volume= $json_output->BTCUSD->volume."</br>";
    echo  $bid = $json_output->BTCUSD->bid."</br>";
   echo    $low = $json_output->BTCUSD->low."</br>";
    echo    $ask = $json_output->BTCUSD->ask."</br>"; */

    
    $runfile = "https://api.flowbtc.com:8405/GetTicker/BTCBRL";

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $runfile);

    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);

    $content = curl_exec ($ch);

    curl_close ($ch); 

    echo $content;