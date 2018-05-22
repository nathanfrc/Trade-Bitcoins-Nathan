<?php 


//Criando a url para o aquivo json
  $jsonurl = "https://www.mercadobitcoin.net/api/BTC/ticker/";

    //Retorna o conteudo do arquivo em formato de string
  $json = file_get_contents($jsonurl,0,null,null);

    //Decodificando a string e criando o json
    $json_output = json_decode($json);

	//var_dump($json_output);
    //Loop para percorrer o json capturando os dados
    foreach ( $json_output->ticker as $trend )
    {
		//maior preço 
         $trend->high;
		//Menor preço unitário de negociação das últimas 24 horas. 
        echo ''.$trend->low.'';
		//contidade de volume 
        echo ''.$trend->vol.'';
		//Preço unitário da última negociação.
		echo $trend->last;
		//Maior preço de oferta de compra das últimas 24 horas..
		echo $trend->buy;
		//Menor preço de oferta de venda das últimas 24 horas..
		echo $trend->sell;
		//Data e hora da informação em Era Unix.
		echo $trend->date;
		
    }



    require ('moedas.php');


    $btc = new moedas();


   $btc->setMaiorPreco($json_output->ticker->high);
   $btc->setMenorPreco($json_output->ticker->low);
   $btc->setVol($json_output->ticker->low);
   $btc->setUltimonegociadoMaior($json_output->ticker->last);
   $btc->setMaiorPrecoOferta($json_output->ticker->buy);
   $btc->setMenorPrecoOferta($json_output->ticker->sell);
   $btc->setData ($json_output->ticker->date);


   $imprima = $btc->getMaiorPreco();

   echo $imprima;
