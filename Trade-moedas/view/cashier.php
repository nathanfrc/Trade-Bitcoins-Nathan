<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  <link rel="icon" href="libs/bootstrap-4.0.0-beta.2/favicon.ico">
   <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
       <?php include "biblioteca.php" ?>

    <title>Calculadora</title>


    <!-- Bootstrap core CSS -->
  <link href="libs/bootstrap-4.0.0-beta.2/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
  </head>


  <body>

  

<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>-->

 <script src='js/jquery-3.2.1.min.js'></script>


<?php  include "calculosAlfaCashier.php" ?>
<!-- login -->
<div class="container">
  
  <!-- Trigger the modal with a button -->

  <!-- Modal -->

    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
        <center>  <h2><span class="glyphicon glyphicon-random"></span> Calculos </h2></center>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
           <h2><span class="glyphicon glyphicon-bitcoin"></span> Calculos AlfaCashier</h2></br>
          <form role="form" method="post" id="form-calculo" name="form-calculo">
       <h4>Moeda</h4>
    <label class="radio-inline">
      <input type="radio"  id="moeda" checked="checked" name="moeda" value="BTC">BTC
    </label>
    <label class="radio-inline">
      <input type="radio"   id=moeda name="moeda" value="BCASH">BCASH
    </label>
     <label class="radio-inline">
      <input type="radio"   id="moeda" name="moeda" value="LTC">LTC
    </label>
      <label class="radio-inline">
      <input type="radio"   id="moeda" name="moeda" value="ETN">ETN
    </label>
  </br>
</br>



          <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-usd"></span>Valor da Moeda em $ dólar</label>
              <input type="text" class="form-control" id="valorBTCUSD" name="valorBTCUSD" placeholder="Valor do bitcoins">
            </div>

            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-plus-sign" name="comisao" id="comisao"></span>Comissão da plataforma</label>
              <select class="selectpicker" data-style="btn-primary" name="comisao" id="comisao">
              <option value="0.5">0.5%</option>
              <option value="1.0">1%</option>
              <option value="1.5">1.5%</option>
              <option value="2.0">2%</option>
               <option value="2.5">2.5%</option>
                <option value="3.0">3%</option>
              </select>
            </div>

             <div class="form-group">
              <label for="psw">R<span class="glyphicon glyphicon-usd"></span>Valor em reais  depositado na Astropay</label>
              <input type="text" class="form-control" id="deposito" name="deposito" placeholder="Deposito">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-usd"></span>Compra do Dolar na Astropay</label>
              <input type="text" class="form-control" id="compraDolar" name="compraDolar" placeholder="Compra Dolar">
            </div>
            
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-check"></span>Calcular</button></br>
               
          </form>
            <center>
               <a href="bitcoins.php" ></span><h4>Voltar</h4></a>
              </center>
              <div class="well well-sm">
                  <div id="reposta">
                    
                  </div>
         </div>
        </div>
      </div>
      
    </div>
  </div> 



<center>
 <footer class="container">
      <p>&copy; Company 2017</p>
    </footer></center>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  <!--  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="libs/bootstrap-4.0.0-beta.2/assets/js/vendor/popper.min.js"></script>
    <script src="libs/bootstrap-4.0.0-beta.2/dist/js/bootstrap.min.js"></script>-->
  </body>
</html>