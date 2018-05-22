<!doctype html>
<html lang="pt">
  <head>

  	<title>Mercado-Bitcoins</title>

    <?php include "estrutura/biblioteca.php" ?>

  	 </head>
  	  <body>

      <?php include "estrutura/atualizarPagina.php" ?>
      <?php include "estrutura/MenuTop.php" ?>


      <main role="main">

<div class="container">
  <p><a href="?pagina=graficoMercado"><h3><span class="glyphicon glyphicon-signal"></span>-Gráfico</h3></a></p>
  <p><center><h2>Taxas do Mercado Bitcoins</h2></center> </p>
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
        <td>Bitcoins,BCash,Litcoins</td>
        <td>1,99% + R$2,90</td>
         <td>0%</td>
         <td>1,99% + R$2,90</td>
         <td>R$ 60,00</td>
         <td> 0,70%</td>
         <td> 0,30%</td> 
      </tr>  
      
    </tbody>
  </table>
</div>

<?php


    require ('api/mercadobitcoins.php');

    $urlOBJ = new mercadobitcoins(); 
    
    

//Criando a url para o aquivo json
  $jsonurl = $urlOBJ->urlTicker();
  
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

      require ('classes/TickerMercadobitcoins.php');

        $ticker = new TickerMercadobitcoins();


        $ticker->setHigh($json_output->ticker->high);
        $ticker->setLow($json_output->ticker->low);
        $ticker->setVol($json_output->ticker->vol);
        $ticker->setLast($json_output->ticker->last);
        $ticker->setBuy($json_output->ticker->buy);
        $ticker->setSell($json_output->ticker->sell);
        $ticker->setData ($json_output->ticker->date);
//==============================================================================

        // bcash

$urlOBJBCH = new mercadobitcoins(); 
        
        
    
    //Criando a url para o aquivo json
      $jsonurl = $urlOBJBCH->urlTickerBcash();
      
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
    
         
    
            $tickerBCH = new TickerMercadobitcoins();
    
    
            $tickerBCH->setHigh($json_output->ticker->high);
            $tickerBCH->setLow($json_output->ticker->low);
            $tickerBCH->setVol($json_output->ticker->vol);
            $tickerBCH->setLast($json_output->ticker->last);
            $tickerBCH->setBuy($json_output->ticker->buy);
            $tickerBCH->setSell($json_output->ticker->sell);
            $tickerBCH->setData ($json_output->ticker->date);
    

//========================================================================================================
//litcoins 

$urlOBJLTC = new mercadobitcoins(); 



//Criando a url para o aquivo json
$jsonurl = $urlOBJLTC->urlTickerLTC();

  //Retorna o conteudo do arquivo em formato de string
$json = file_get_contents($jsonurl,0,null,null);

  //Decodificando a string e criando o json
  $json_output2 = json_decode($json);

//var_dump($json_output);
  //Loop para percorrer o json capturando os dados
  foreach ( $json_output2->ticker as $trend )
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

 

    $tickerLTC = new TickerMercadobitcoins();


    $tickerLTC->setHigh($json_output2->ticker->high);
  //  $tickerLTC>setLow($json_output2->ticker->low);
    $tickerLTC->setVol($json_output2->ticker->vol);
    $tickerLTC->setLast($json_output2->ticker->last);
    $tickerLTC->setBuy($json_output2->ticker->buy);
    $tickerLTC->setSell($json_output2->ticker->sell);
    $tickerLTC->setData ($json_output2->ticker->date);

    $param_low = $json_output2->ticker->low;
    $result_low = number_format($param_low,2);
    $result_low = str_replace(".","",$result_low); //tira ponto 
    $result_low = str_replace(",","",$result_low); //tira virgula
    $result_low = substr($result_low, 0, -2);  // retorna "abcde"


     ?> 
      
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
        <th>Data</th>
      </tr>
    </thead>
    <tbody>
      <tr class="success">
      <td>Bitcoins</td>
        <td><?php echo "R$ ".$ticker->getHigh().",00";?></td>
        <td><?php echo "R$ ".$ticker->getLow().",00";?></td>
        <td><?php echo $ticker->getVol().",00";?></td>
        <td><?php echo "R$ ".$ticker->getLast().",00";?></td>
        <td><?php echo "R$ ".$ticker->getBuy().",00";?></td>
        <td><?php echo "R$ ".$ticker->getSell().",00";?></td>
        <td><?php echo $ticker->getData();?></td>
      </tr>  
      <tr class="info">
      <td>BCash</td>
        <td><?php echo "R$ ".$tickerBCH->getHigh().",00";?></td>
        <td><?php echo "R$ ".$tickerBCH->getLow().",00";?></td>
        <td><?php echo $tickerBCH->getVol().",00";?></td>
        <td><?php echo "R$ ".$tickerBCH->getLast().",00";?></td>
        <td><?php echo "R$ ".$tickerBCH->getBuy().",00";?></td>
        <td><?php echo "R$ ".$tickerBCH->getSell().",00";?></td>
        <td><?php echo $tickerBCH->getData();?></td>
      </tr>  
      <tr class="warning">
      <td>Litcoins</td>
        <td><?php echo "R$ ".$tickerLTC->getHigh().",00";?></td>
        <td><?php echo "R$ ".$result_low.",00";?></td>
        <td><?php echo $tickerLTC->getVol().",00";?></td>
        <td><?php echo "R$ ".$tickerLTC->getLast().",00";?></td>
        <td><?php echo "R$ ".$tickerLTC->getBuy().",00";?></td>
        <td><?php echo "R$ ".$tickerLTC->getSell().",00";?></td>
        <td><?php echo $tickerLTC->getData();?></td>
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