<?php

$moeda = $_REQUEST['moeda'];
$deposito = $_REQUEST['deposito'];
$valorBTC = $_REQUEST['valorBTCUSD'];
$comisao = $_REQUEST['comisao'];
$dolarAstropay = $_REQUEST['compraDolar'];


//taxa btc 3% mais 50 dolares de envio
//taxa etherum 3%  1 dolar
//taxa bcash 3% não sei 
//taxa litcoins 3% 1 dolar 

switch ($moeda) {
	case 'BTC':
		



		$depositado  = $deposito / $dolarAstropay;

			$valor = $valorBTC  + 50;

			$percentual = $comisao / 100.0; // 
			$valor_final = $valor + ($percentual * $valor);

			$temDeposita = $valor_final * $dolarAstropay;


			//calculos da operação mercado bitcoins 
			//taxa venda 
			$taxaMercadoVenda = 2.30 / 100.0 + 3;
			$taxaVenda = $temDeposita - ($taxaMercadoVenda * $temDeposita);


			



			echo "foi depositado ".$deposito." / dólar ".$dolarAstropay." = ".$depositado."</br>";
			echo "Valor com todas as taxas na plataforma é = ".$valor_final."</br>";
			echo "Para uma moeda completa vc precisa depositar = ".$temDeposita;
			

		break;
	case 'BCASH':
		# code...
		break;
		case 'BTC':
		# code...
		break;
		case 'LTC':
		# code...
		break;
		case 'ETN':
		# code...
		break;
	default:
		echo"moeda invalida";
		break;
}





	//pega valor mais a porcetagem 
    $percentual = 3.0 / 100.0; // 
	$valor_final = $param_valor + ($percentual * $param_valor);