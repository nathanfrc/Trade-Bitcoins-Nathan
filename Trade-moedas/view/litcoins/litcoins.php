<!doctype html>
<html lang="pt">
  <head>

  	<title>Litcoins</title>

    <?php include "estrutura/biblioteca.php" ?>

  	 </head>
  	  <body>

      <?php include "estrutura/atualizarPagina.php" ?>
      <?php include "estrutura/MenuTop.php" ?>


      <main role="main">


      <script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/currency.js"></script>
      <div class="coinmarketcap-currency-widget" data-currency="litecoin" data-base="USD"  data-secondary="BTC"></div>
      <?php  

            require ('api/coinmarketcap.php');

                $coin = new  coinmarketcap();

                $url = $coin->infoLTC();

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
  <h2> <h2> <span class="glyphicon glyphicon-bitcoin"></span>Litcoins </h2></br></h2>
  <p>Informações do Litcoins</p>
  <table class="table">
    <thead>
      <tr>
      <th>Rank</th>
        <th>Nome</th>
        <th>Simbolo</th>
        <th>Valor</th>
        <th>Total de LTC na rede </th>
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
        <td><?php echo "LTC" ?></td>
        <td><?php echo "$ ".$obj->getPrice_usd(); ?></td>
         <td><?php echo $obj->getTotal_supply(); ?></td>
         <td><?php echo $obj->getMax_supply(); ?></td>
       
         <?php 
        
        //mudando cor da porcentagem
        $h1per = $obj->getPercent_change_1h();
        
     $h1per2 = (int) $h1per;

    

                if($h1per2 < 0)
                {
                    echo "<b><td style='color:#FF0000;'>".$obj->getPercent_change_1h()."</td></b>";
                }
                else
                {
                    echo "<b><td style='color:#008000;'>".$obj->getPercent_change_1h()."</td></b>";
                }
        
        ?>

<?php
//mudando cor da porcentagem
        $h24per = $obj->getPercent_change_24h(); 

        $h24per2 = (int)  $h24per;
        
                if($h24per2 < 0)
                {
                    echo "<b><td style='color:#FF0000;'>".$obj->getPercent_change_24h()."</td></b>";
                }
                else
                {
                    echo "<b><td style='color:#008000;'>".$obj->getPercent_change_24h()."</td></b>";
                }
        
        ?>

<?php
//mudando cor da porcentagem
        $d7per = $obj->getPercent_change_7d(); 


        
        $d7per2 = (int)  $d7per;
        
                if($d7per2 < 0)
                {
                    echo "<b><td style='color:#FF0000;'>".$obj->getPercent_change_7d()."</td></b>";
                }
                else
                {
                    echo "<b><td style='color:#008000;'>".$obj->getPercent_change_7d()." </td></b>";
                }
        
        ?>

          <td><?php echo $obj->getLast_updated();?> </td>
      </tr>   
    </tbody>
  </table>
</div>

>


      
      </main>
  	  <footer class="container">
     <center> <p>&copy; Company APPTrade Moedas 2017</p></center>
    </footer>
  </body>
</html> 	