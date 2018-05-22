<!doctype html>
<html lang="pt">
  <head>

  	<title>Bitcoins</title>

    <?php include "estrutura/biblioteca.php" ?>

  	 </head>
  	  <body>

      <?php include "estrutura/atualizarPagina.php" ?>
      <?php include "estrutura/MenuTop.php" ?>


      <main role="main">


      <script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/currency.js"></script>
      <div class="coinmarketcap-currency-widget" data-currency="bitcoin" data-base="USD" ></div>

    <center>  <div id="bitvalor-widget"></div>
<script type="text/javascript" src="//bitvalor.com/js/widget.min.js"></script></center>

      <?php  

            require ('api/coinmarketcap.php');

                $coin = new  coinmarketcap();

                $url = $coin->infoBTC();

                $json_file = file_get_contents($url);

                $json_str = json_decode($json_file, true);


              require ('classes/CoinMakeBitcoins.class.php');
              
              
              $obj = new CoinMakeBitcoins();

                foreach ( $json_str as $e ) 
                { 
                    
               $obj->setID($e['id']);
               $obj->setName($e['name']);
               $obj->setSymbol($e['symbol']);
               $obj->setRank($e['rank']);
               $obj->setPrice_usd($e['price_usd']);
                $obj->setPrice_btc($e['price_btc']);
                $obj->setVolume_usd24 ($e['24h_volume_usd']);
                 $obj->setMarket_cap_usd($e['market_cap_usd']);
                $obj->setAvailable_supply ($e['available_supply']);
                $obj->setTotal_supply($e['total_supply']);
              $obj->setMax_supply($e['max_supply']);
                   $obj->setPercent_change_1h($e['percent_change_1h']);
                    $obj->setPercent_change_24h($e['percent_change_24h']);
                   $obj->setPercent_change_7d($e['percent_change_7d']);
                   $obj->setLast_updated($e['last_updated']);
                    
                } 




      ?>
<div class="container">
  <h2> <h2> <span class="glyphicon glyphicon-bitcoin"></span>Bitcoins -> CoinMakeBitcoins </h2></br></h2>
  <p>Informações do Bitcoins</p>
  <table class="table">
    <thead>
      <tr>
      <th>Rank</th>
        <th>Nome</th>
        <th>Simbolo</th>
        <th>Valor</th>
        <th>Total de BTC na rede </th>
        <th>Limite de BTC</th>
        <th>Falta Minerar</th>
        <th>% 1h</th>
        <th>% 24h</th>
        <th>% 7D</th>
        <th>Ultima/Atualização</th>
      </tr>
    </thead>
    <tbody>
      <tr class="active">
        <td><?php echo $obj->getRank(); ?></td>
        <td><?php echo $obj->getName(); ?></td>
        <td><?php echo "BTC" ?></td>
        <td><?php echo "$ ".$obj->getPrice_usd(); ?></td>
         <td><?php echo $obj->getTotal_supply(); ?></td>
         <td><?php echo $obj->getMax_supply(); ?></td>
         <td><?php echo $falta = $obj->RetornaFalta() ?><td>
         <?php 
        
        //mudando cor da porcentagem
        $h1per = $obj->getPercent_change_1h();
        
     $h1per2 = (int) $h1per;

    

                if($h1per2 < 0)
                {
                    echo "<b><td style='color:#FF0000;'>".$obj->getPercent_change_1h()."%</td></b>";
                }
                else
                {
                    echo "<b><td style='color:#008000;'>".$obj->getPercent_change_1h()."%</td></b>";
                }
        
        ?>

<?php
//mudando cor da porcentagem
        $h24per = $obj->getPercent_change_24h(); 

        $h24per2 = (int)  $h24per;
        
                if($h24per2 < 0)
                {
                    echo "<b><td style='color:#FF0000;'>".$obj->getPercent_change_24h()."%</td></b>";
                }
                else
                {
                    echo "<b><td style='color:#008000;'>".$obj->getPercent_change_24h()."%</td></b>";
                }
        
        ?>

<?php
//mudando cor da porcentagem
        $d7per = $obj->getPercent_change_7d(); 


        
        $d7per2 = (int)  $d7per;
        
                if($d7per2 < 0)
                {
                    echo "<b><td style='color:#FF0000;'>".$obj->getPercent_change_7d()."%</td></b>";
                }
                else
                {
                    echo "<b><td style='color:#008000;'>".$obj->getPercent_change_7d()."% </td></b>";
                }
        
        ?>

          <td><?php echo $obj->getLast_updated();?> </td>
      </tr>   
    </tbody>
  </table>
</div>

<?php //venda   
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



  
      $lastBR = $json_output->BRL->last;
      $buyBR = $json_output->BRL->buy;
      $sellBR= $json_output->BRL->sell;
      $symbolBR = $json_output->BRL->symbol;










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
  
     $lastUS = $json_output->USD->last;
     $buyUS = $json_output->USD->buy;
     $sellUS = $json_output->USD->sell;
    $symbolUS = $json_output->USD->symbol;
?>

<div class="container">
<h2> <h2> <span class="glyphicon glyphicon-bitcoin"></span>Bitcoins -> Brockchain </h2></br></h2>
  <p>Tabelas de preços de comparações de preços de bitcoins</p>
  <table class="table">
    <thead>
      <tr>
        <th>Moeda</th>
        <th>Compra</th>
        <th>Venda</th>
        <th>Ultimo</th>
      </tr>
    </thead>
    <tbody>
      <tr class="success">
        <td><?php echo $symbolUS ?></td>
        <td><?php echo "$ ".$buyUS ?></td>
         <td><?php echo "$ ".$sellUS ?></td>
         <td><?php echo "$ ".$lastUS ?></td
      </tr>  
      <tr class="danger">
        <td><?php echo $symbolBR ?></td>
        <td><?php echo "R$ ".$buyBR ?></td>
         <td><?php echo "R$ ".$sellBR ?></td>
         <td><?php echo "R$ ".$lastBR ?></td>
      </tr>  
    </tbody>
  </table>
</div>
<!--  Base de comparações   -->


      
      </main>
  	  <footer class="container">
     <center> <p>&copy; Company APPTrade Moedas 2017</p></center>
    </footer>
  </body>
</html> 	
