<?php  



//pegando cotação em dolar

    //Criando a url para o aquivo json
    $jsonurl2 = "https://blockchain.info/pt/ticker";
    $url = "https://api.bitcointrade.com.br/v1/public/BTC/ticker/";
    
        //Retorna o conteudo do arquivo em formato de string
      $json2 = file_get_contents($url,0,null,null);
    
        //Decodificando a string e criando o json
        $json_output = json_decode($json2);
    
      //var_dump($json_output);
        //Loop para percorrer o json capturando os dados
        foreach ( $json_output->data as $trend )
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
      
       echo $json_output->data->last."</br>";
       echo $json_output->data->low."</br>";
       echo $json_output->data->volume."</br>";
     echo    $json_output->data->buy."</br>";
      echo    $json_output->data->sell."</br>";
     echo    $json_output->data->date."</br>";
     echo    $json_output->data->trades_quantity."</br>";