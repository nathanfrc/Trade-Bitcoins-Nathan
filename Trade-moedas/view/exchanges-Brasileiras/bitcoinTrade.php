<!doctype html>
<html lang="pt">
  <head>

  	<title>Bitcoin Trade</title>

    <?php include "estrutura/biblioteca.php" ?>

  	 </head>
  	  <body>

      <?php include "estrutura/atualizarPagina.php" ?>
      <?php include "estrutura/MenuTop.php" ?>


      <main role="main">
<?php
      //pegando cotação em dolar

    //Criando a url para o aquivo json
 
    $url = "https://api.bitcointrade.com.br/v1/public/BTC/ticker/";
    
        require ('api/bitcoinTrade.php');
    
        $urlOBJ = new bitcoinTrade(); 

        $url = $urlOBJ->urlTicker();


        //Retorna o conteudo do arquivo em formato de string
      $json2 = file_get_contents($url,0,null,null);
    
        //Decodificando a string e criando o json
        $json_output = json_decode($json2);
    
      //var_dump($json_output);
        //Loop para percorrer o json capturando os dados
        
        require ('classes/TickerBitcoinsTrade.php');
        
        $ticker = new TickerBitcoinsTrade();
      
       $ticker->setHigh($json_output->data->high);
       $ticker->setLow($json_output->data->low);
       $ticker->setVolume($json_output->data->volume);
       $ticker->setLast($json_output->data->last);
     $ticker->setBuy($json_output->data->buy);
      $ticker->setSell($json_output->data->sell);
     $ticker->setDates($json_output->data->date);
     $ticker->setTrades_quantity($json_output->data->trades_quantity);


?>
<div class="container">
 <!-- <p><a href="?pagina=graficoMercado"><h3><span class="glyphicon glyphicon-signal"></span>-Gráfico</h3></a></p>-->
  <p><center><h2>Taxas do Bitcoins-Trade</h2></center> </p>
  <table class="table">
    <thead>
      <tr>
         <th>ID</th>
        <th>Nome</th>
        <th>Depósito Reais</th>
        <th>Depósito BTC</th>
        <th>Saque Reais</th>
        <th>Saque BTC</th>
        <th>Order comum</th>
        <th>Order Ativa</th>
      </tr>
    </thead>
    <tbody>
      <tr class="danger">
        <td>1</td>
        <td>Bitcoins</td>
        <td>0%</td>
         <td>0%</td>
         <td>R$ 4,90 + 0,99%</td>
         <td>Taxa volatil</td>
         <td> 0,50%</td>
         <td> 0,50%</td> 
      </tr>  
      
    </tbody>
  </table>
</div>
              
<div class="container">
  
  <p><center><h2>Ticker</h2></center> </p>
  <table class="table">
    <thead>
      <tr>
      <th>Moeda</th>
         <th>Maior Valor</th>
        <th>Menor Valor</th>
        <th>Volume</th>
        <th>Ultima Compra</th>
        <th>Valor de Compra</th>
        <th>Valor de Venda</th>
        <th>Qº De trades 24h</th>
        <th>Data</th>
      </tr>
    </thead>
    <tbody>
      <tr class="success">
      <td>Bitcoins</td>
        <td><?php echo "R$ ".$ticker->getHigh().",00";?></td>
        <td><?php echo "R$ ".$ticker->getLow().",00";?></td>
        <td><?php echo $ticker->getVolume();?></td>
        <td><?php echo "R$ ".$ticker->getLast().",00";?></td>
        <td><?php echo "R$ ".$ticker->getBuy().",00";?></td>
        <td><?php echo "R$ ".$ticker->getSell().",00";?></td>
        <td><?php echo $ticker->getTrades_quantity();?></td>
        <td><?php echo $ticker->getDates();?></td>
      </tr>  
    </tbody>
  </table>
</div>






      </main>
  	  <footer class="container">
     <center> <p>&copy; Company APPTrade Moedas 2017</p></center>
    </footer>
  </body>
</html> 	