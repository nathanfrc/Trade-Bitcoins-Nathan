<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
   <link rel="icon" href="libs/bootstrap-4.0.0-beta.2/favicon.ico">
   <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
   <script src='js/jquery-3.2.1.min.js'></script>
       <?php include "biblioteca.php" ?>

    <title>Bitcoins</title>


    <!-- Bootstrap core CSS -->
  <link href="libs/bootstrap-4.0.0-beta.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
  </head>



  <body>


       <script language="Javascript">
            window.onload = function () {
            setTimeout("location.reload();", 15000);
        }
        </script>
        Atualiza a página a cada 15 segundos
       

<!-- Menu cima -->

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-bitcoin"></span>Trade Moedas Digitais </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
         
          <li class="nav-item">
            <a class="nav-link" href="#">Bitcoins</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="#">Litcoins</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="#">Bitcoins Cash</a>
          </li>

          <li class="nav-item">
            <a class="nav-link"  href="cashier.php">AlfaCashier-Calculos</a>
          </li>

            <li class="nav-item">
            <a class="nav-link"  href="CasasDeCambio.php">Taxas de cambios </a>
          </li>
            <li class="nav-item">
            <a class="nav-link"  href="graficoMercado.php">Gráfico Mercado Bticoins </a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
        
      </div>
    </nav>

<!-- Fim do menu -->


<main role="main">



      <?php

            require ('moedas.php');

            $bitcoins = new moedas();
            
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



    $btc = new moedas();

    function formatarValor($param)
        {

            $result = number_format($param,2);
          $result = str_replace(".","",$result); //tira ponto 
          $result = str_replace(",","",$result); //tira virgula
          $result = substr($result, 0, -2);  // retorna "abcde"
          return  $result;
        }


           $btc->setMaiorPreco($json_output->ticker->high);
           $btc->setMenorPreco($json_output->ticker->low);
           $btc->setVol($json_output->ticker->vol);
           $btc->setUltimonegociadoMaior($json_output->ticker->last);
           $btc->setMaiorPrecoOferta($json_output->ticker->buy);
           $btc->setMenorPrecoOferta($json_output->ticker->sell);
           $btc->setData ($json_output->ticker->date);


            $maiorPreco = formatarValor($btc->getMaiorPreco());
            $menorPreco = formatarValor($btc->getMenorPreco());
            $quantidade= $btc->getVol();
            $ultimaNegoci= formatarValor($btc->getUltimonegociadoMaior());
            $maiorPrecoOferta= formatarValor($btc->getMaiorPrecoOferta());
            $menorPrecoOferta= formatarValor($btc->getMenorPrecoOferta()); 
            $data = $btc->getData();


           $ultimoValor =  formatarValor($btc->valorDoBtcComEncargos($ultimaNegoci));


           //comissões de vendas 
           $vendaPor = new moedas();

           $valorVenda070 = $vendaPor->vendaMercadobitcoinsNormal($ultimaNegoci);


           $valorVenda030 = $vendaPor->vendaMercadobitcoinsOrder($ultimaNegoci);

           $diferenca =  $valorVenda030 -  $valorVenda070;


           $valorCompra30 = $vendaPor->valorDoBtcComEncargos30($ultimaNegoci);

             
      ?>

      <!-- Main jumbotron for a primary marketing message or call to action -->
     <!-- <div class="jumbotron">
        <div class="container">
          <h5 class="display-3"></h5>
         <h2> <span class="glyphicon glyphicon-bitcoin"></span>Bitcoins </h2></br>
         <h5> <p>Maior preço unitário de negociação das últimas 24 horas:<?php echo "R$ ".$maiorPreco.",00" ?>  </h5></p>
          <h5> <p>Menor preço unitário de negociação das últimas 24 horas:<?php echo "R$ ".$menorPreco.",00" ?>  </h5></p>
          <h5><p> Quantidade negociada nas últimas 24 horas:<?php echo "BTC ".$quantidade." Negocias 24h" ?>  </h5></p>
          <h5><p> Preço unitário da última negociação:<?php echo "R$ ".$ultimaNegoci.",00" ?>  </h5></p>
           <h5><p> Maior preço de oferta de compra das últimas 24 horas:<?php echo "R$ ".$maiorPrecoOferta.",00" ?>  </h5></p>
           <h5><p> Menor preço de oferta de venda das últimas 24 horas:<?php echo "R$ ".$menorPrecoOferta.",00" ?>  </h5></p>
           <h5> <p>Valor do btc com todos encargos:<?php echo "R$ ".$ultimoValor.",00" ?>  </h5></p> 
           <h5> <p>Data e hora da informação em Era Unix:<?php //echo $data ?>  </h5></p>
        </div>
      </div>-->

  <div class="container">
  <h2> <h2> <span class="glyphicon glyphicon-bitcoin"></span>Bitcoins -> Mercado bitcoins </h2></br></h2>
  <p>Tabelas de preços de comparações de preços de bitcoins</p>
  <table class="table">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Maior P.U</th>
        <th>Menor P.U</th>
        <th>Quantidade</th>
        <th>Ultima negoc</th>
        <th>Maior compra</th>
        <th>Menor Compra</th>
         <th>Valor total ,030%</th>
        <th>Valor total ,070%</th>
      </tr>
    </thead>
    <tbody>
      <tr class="active">
        <td>Mercado Bitcoins</td>
        <td><?php echo "R$ ".$maiorPreco.",00" ?></td>
        <td><?php echo "R$ ".$menorPreco.",00" ?></td>
        <td><?php echo "BTC ".$quantidade." Negocias 24h" ?></td>
         <td><?php echo "R$ ".$ultimaNegoci.",00" ?></td>
          <td><?php echo "R$ ".$maiorPrecoOferta.",00" ?></td>
          <td><?php echo "R$ ".$menorPrecoOferta.",00" ?></td>
           <td><?php echo "R$ ".$valorCompra30.",00" ?> </td>
          <td><?php echo "R$ ".$ultimoValor.",00" ?> </td>
      </tr>   
    </tbody>
  </table>
</div>

<?php //venda   ?>


<div class="container">
  
  <p>Tabelas de orderns de venda comum e do livro (0.70% , 0.30%)</p>
  <table class="table">
    <thead>
      <tr>
        <th>Order normal de venda 0,70%</th>
        <th>Order do livro  0,30%</th>
        <th>Diferença</th>
       
      </tr>
    </thead>
    <tbody>
      <tr class="info">
        <td><?php echo "R$ ".$valorVenda070.",00" ?></td>
        <td><?php echo "R$ ".$valorVenda030.",00" ?></td>
        <td><?php echo "R$ ".$diferenca.",00" ?></td>
      </tr>   
    </tbody>
  </table>
</div>




 <?php
        //blochains 


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


      //instanciar a classe 
      //soma de todos as porcentagens de venda 

      $cinco = new moedas();

     $valorbtcBRL5 =  $cinco->blockCincoPor($lastBR);
      $valorbtcBRL8 =  $cinco->blockOitoPor($lastBR);
       $valorbtcBRL10 =  $cinco->blockDezPor($lastBR);
        $valorbtcBRL12 =  $cinco->blockDozePor($lastBR);



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



      $cinco = new moedas();

     $valorbtcUSD5 =  $cinco->blockCincoPor($lastUS);
      $valorbtcUSD8 =  $cinco->blockOitoPor($lastUS);
       $valorbtcUSD10 =  $cinco->blockDezPor($lastUS);
        $valorbtcUSD12 =  $cinco->blockDozePor($lastUS);




 include "calculadoraBTC.php"

  ?>

  
</br>

</div>
</br>
<div class="container">
  
  <p>Tabelas de preços de comparações de preços de bitcoins</p>
  <table class="table">
    <thead>
      <tr>
        <th>Moeda</th>
        <th>Ultimo valor</th>
        <th>Maior compra</th>
        <th>Menor compra</th>
        <th>+5%</th>
        <th>+8%</th>
        <th>+10%</th>
        <th>+12%</th>
      </tr>
    </thead>
    <tbody>
      <tr class="success">
        <td><?php echo $symbolUS ?></td>
        <td><?php echo "$ ".$lastUS ?></td>
        <td><?php echo "$ ".$buyUS ?></td>
         <td><?php echo "$ ".$sellUS ?></td>
         <td><?php echo "$ ".$valorbtcUSD5 ?></td>
         <td><?php echo "$ ".$valorbtcUSD8 ?></td>
         <td><?php echo "$ ".$valorbtcUSD10?></td>
         <td><?php echo "$ ".$valorbtcUSD12?></td>
      </tr>  
      <tr class="danger">
        <td><?php echo $symbolBR ?></td>
        <td><?php echo "R$ ".$lastBR ?></td>
        <td><?php echo "R$ ".$buyBR ?></td>
         <td><?php echo "R$ ".$sellBR ?></td>
          <td><?php echo "$ ".$valorbtcBRL5 ?></td>
         <td><?php echo "$ ".$valorbtcBRL8 ?></td>
         <td><?php echo "$ ".$valorbtcBRL10?></td>
         <td><?php echo "$ ".$valorbtcBRL12?></td>
      </tr>  
    </tbody>
  </table>
</div>
<!--  Base de comparações   -->

<fieldset class="scheduler-border">
    
<div class="form-group">
<div class="container">
  
  <p>Compra brasil Mercado Bitcoins</p>
  <table class="table">
    <thead>
      <tr>
        <th>Compra Brasil</th>
        <th>Valor Compra</th>
      </tr>
    </thead>
    <tbody>
      <tr class="success">
        <td>Mercado Bitcoins</td>
        <td><?php echo "R$ ". $ultimoValor ?></td>
      </tr>  
    </tbody>
  </table>

   <p>Venda Bolivia com blockchain</p>
  <table class="table">
    <thead>
      <tr>
        <th>Venda Bolivia</th>
        <th>Valor venda 10%</th>
      </tr>
    </thead>
    <tbody>
      <tr class="danger">
        <td>Pessoas</td>
        <td><?php echo "$ ".$valorbtcBRL10 ?></td>
      </tr>  
    </tbody>
  </table>


  <p> Compra no Brasil e vende na Bolivia</p>
    <div class="well well-sm">
      
       <h2>

        <?php  $lucro = $valorbtcBRL10 - $ultimoValor;

         echo "Compra R$ ".$ultimoValor.".00 - Venda R$ ".$valorbtcBRL10." = R$  ".$lucro
          ?>
        </h2>

    </div>

 <p> Compra na Bolivia 10% e vende no Mercado bitcoins  com taxas de desconto 0,70 % 2% saque + R$ 3,00 </p>
    <div class="well well-sm">
      
       <h2>

        <?php 
                $saque = new moedas();

          $valorSaque = $saque->valorDoBtcComEncargosSaque($ultimaNegoci);


         $lucro = $valorSaque - $valorbtcBRL10;

         echo "Compra R$ ".$valorbtcBRL10.".00 - Venda R$ ".$valorSaque." = líquido R$  ".$lucro
          ?>
        </h2>

    </div>


</div>

</div>

</fieldset>
   

    </main>

    <footer class="container">
      <p>&copy; Company 2017</p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  <!--  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="libs/bootstrap-4.0.0-beta.2/assets/js/vendor/popper.min.js"></script>
    <script src="libs/bootstrap-4.0.0-beta.2/dist/js/bootstrap.min.js"></script>-->
  </body>
</html>