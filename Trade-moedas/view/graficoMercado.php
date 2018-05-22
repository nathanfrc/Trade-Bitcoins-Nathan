<!doctype html>
<html lang="en">
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




<main role="main">

  <!-- Mercado Bitcoin TradingView Widget INICIO -->
<script type="text/javascript" src="https://s3.amazonaws.com/tradingview/tv.js"></script> 
<script type="text/javascript"> 
new TradingView.widget({ 
  "width": 800, 
  "height": 600, 
  "symbol": "MERCADO:BTCBRL", 
  "interval": "15", 
  "timezone": "exchange", 
  "theme": "White", 
  "toolbar_bg": "#000000", 
  "hide_side_toolbar": false, 
  "watchlist": [ 
    "MERCADO:BTCBRL", 
    "MERCADO:LTCBRL", 
    "BITSTAMP:BTCUSD" 
  ], 
  "details": true, 
  "hideideas": true 
}); 
</script> 
<!-- Mercado Bitcoin TradingView Widget FIM -->




   </main>
    <footer class="container">
     <center> <p>&copy; Company 2017</p></center>
    </footer>
  </body>
</html>