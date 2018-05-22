<?php 




//pegando cotação em dolar

    //Criando a url para o aquivo json
    $jsonurl2 = "https://api.flowbtc.com:8405/GetTicker/BTCBRL/";
    
        //Retorna o conteudo do arquivo em formato de string
      $json2 = file_get_contents($jsonurl2,0,null,null);
    
        //Decodificando a string e criando o json
        $json_output = json_decode($json2);
    
      //var_dump($json_output);
        //Loop para percorrer o json capturando os dados
        foreach ( $json_output as $e ) 
        { 
            
             echo $e['high'];
            
        } 
      
     