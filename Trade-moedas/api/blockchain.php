<?php 



class blockchain{

        function ticker()
        {
                return "https://blockchain.info/pt/ticker";
        }


}




//Criando a url para o aquivo json
$jsonurl = "https://blockchain.info/pt/ticker";

//Retorna o conteudo do arquivo em formato de string
$json = file_get_contents($jsonurl,0,null,null);

//Decodificando a string e criando o json
$json_output = json_decode($json);

//var_dump($json_output);
//Loop para percorrer o json capturando os dados
foreach ( $json_output->USD as $trend )
{

echo $trend->last;
//Maior preço de oferta de compra das últimas 24 horas..
echo $trend->buy;
//Menor preço de oferta de venda das últimas 24 horas..
echo $trend->sell;
//Data e hora da informação em Era Unix.
echo $trend->symbol;

}

require ('classes/Bitcoins.class.php');

$bit = new Bitcoins();


$lastBR = $json_output->USD->last;
$buyBR = $json_output->USD->buy;
$sellBR= $json_output->USD->sell;
$symbolBR = $json_output->USD->symbol;