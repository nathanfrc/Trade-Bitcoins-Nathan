<?php 



//Criando a url para o aquivo json
  $jsonurl = "https://blockchain.info/pt/ticker";

    //Retorna o conteudo do arquivo em formato de string
  $json = file_get_contents($jsonurl,0,null,null);

    //Decodificando a string e criando o json
    $json_output = json_decode($json);

  //var_dump($json_output);
    //Loop para percorrer o json capturando os dados
    foreach ( $json_output->BRL as $trend )
    {
    //maior preço 
     // $trend->15m;
    //Menor preço unitário de negociação das últimas 24 horas. 
    //Preço unitário da última negociação.
    echo $trend->last;
    //Maior preço de oferta de compra das últimas 24 horas..
    echo $trend->buy;
    //Menor preço de oferta de venda das últimas 24 horas..
    echo $trend->sell;
    //Data e hora da informação em Era Unix.
    echo $trend->symbol;
    
    }



  
    echo	$last = $json_output->BRL->last."</br>";
    echo	$buy = $json_output->BRL->buy."</br>";
    echo	$sell = $json_output->BRL->sell."</br>";
    echo	$symbol = $json_output->BRL->symbol."</br>";


//pegando cotação em dolar

    //Criando a url para o aquivo json
  $jsonurl2 = "https://blockchain.info/pt/ticker";

    //Retorna o conteudo do arquivo em formato de string
  $json2 = file_get_contents($jsonurl2,0,null,null);

    //Decodificando a string e criando o json
    $json_output = json_decode($json2);

  //var_dump($json_output);
    //Loop para percorrer o json capturando os dados
    foreach ( $json_output->USD as $trend )
    {
    //maior preço 
     // $trend->15m;
    //Menor preço unitário de negociação das últimas 24 horas. 
    //Preço unitário da última negociação.
    echo $trend->last;
    //Maior preço de oferta de compra das últimas 24 horas..
    echo $trend->buy;
    //Menor preço de oferta de venda das últimas 24 horas..
    echo $trend->sell;
    //Data e hora da informação em Era Unix.
    echo $trend->symbol;
    
    }



  
    echo	$last = $json_output->USD->last."</br>";
    echo	$buy = $json_output->USD->buy."</br>";
    echo	$sell = $json_output->USD->sell."</br>";
    echo	$symbol = $json_output->USD->symbol."</br>";










?>