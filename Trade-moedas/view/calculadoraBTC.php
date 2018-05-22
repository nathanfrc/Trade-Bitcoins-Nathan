









<div class="container">
  <h2> <h2> <span class="glyphicon glyphicon-bitcoin"></span>Blockchain </h2></br></h2>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
<form   method="GET" action="bitcoins.php" >
 
  
<div class="container">
  <h2>Moeda</h2>
    <label class="radio-inline">
      <input type="radio"  id="moeda" name="moeda" value="USD">USD - Dólar
    </label>
    <label class="radio-inline">
      <input type="radio"  checked="checked" id="moeda" name="moeda" value="BRL">BRL - Real
    </label>
  </br>
  <div class="row">
    <div class="col-sm-3">
     <div class="input-group" >
      <input type="text" class="form-control" placeholder="Digite o valor em reais ou dolar" name="valor" id="valor" data-toggle="tooltip" data-placement="top" title="Digite o valor em reais ou dólar">
      <div class="input-group-btn">
        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
      </div>
    </div>
  </div>
  </div>

 
  
  </form>
<?php
  				$valor = $_GET['valor'];
  				$moeda = $_GET['moeda'];

  				if(!empty($valor)and !empty($moeda))
  				{

  					
  					//pegando cotação em dolar
  					$ch = curl_init();
					// informar URL e outras funções ao CURL
					curl_setopt($ch, CURLOPT_URL, "https://blockchain.info/tobtc?currency=".$moeda."&value=".$valor);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
					// Acessar a URL e retornar a saída
					$output = curl_exec($ch);
					// liberar
					curl_close($ch);
					// Substituir ‘Google’ por ‘PHP Curl’
					$output = str_replace(‘Google’, ‘PHP’, $output);
					// Imprimir a saída
				      $valorSite = $output;
    
  				}
?>


	



      <div id="reposta"><h1>

      	<?php 

      	if($moeda =="BRL")
      	{
      		echo "<div class='well well-sm'>R$".$valor.",00 = ".$valorSite." Bitcoins </div>";
      	}
      	elseif($moeda == "USD") 
      	{
      		echo "<div class='well well-sm'>$".$valor.".00 = ".$valorSite." Bitcoins </div>";
      	}	



      		?>
      </h1>
      	</div>
</div>
</div>
  
</br>


</div>
  
</br>

</div>
