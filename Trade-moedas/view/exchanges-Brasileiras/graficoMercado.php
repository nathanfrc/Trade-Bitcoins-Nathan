<!doctype html>
<html lang="pt">
  <head>

  	<title>Mercado-Bitcoins</title>

    <?php include "estrutura/biblioteca.php" ?>

  	 </head>
  	  <body>

      <?php// include "estrutura/atualizarPagina.php" ?>
      <?php include "estrutura/MenuTop.php" ?>


      <main role="main">

        
<div class="container">

<center><p><h1><span class="glyphicon glyphicon-signal"></span>-Gráfico</h1> </p></center>
  <!-- Mercado Bitcoin TradingView Widget INICIO -->
<script type="text/javascript" src="https://s3.amazonaws.com/tradingview/tv.js"></script> 
<script type="text/javascript"> 
new TradingView.widget({ 
  "width": 1000, 
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

</div>






      </main>


      </div>
      </main>
  	  <footer class="container">
     <center> <p>&copy; Company APPTrade Moedas 2017</p></center>
    </footer>
  </body>
</html> 	