<?php



class moedas {



	public $maiorPreco;
	public $menorPreco;
	public $vol;
	public $ultimonegociadoMaior;
	public $maiorPrecoOferta;
	public $menorPrecoOferta;
	public $data;

function formatarValor($param)
{

    $result = number_format($param,2);
	$result = str_replace(".","",$result); //tira ponto 
	$result = str_replace(",","",$result); //tira virgula
	$result = substr($result, 0, -2);  // retorna "abcde"
	return  $result;
}

//valor de encargos com 0,70
function valorDoBtcComEncargos($param_valor)
{

//pega o btc e soma valor final do btc com todos encargos

	$percentual = 0.70 / 100.0; // 15%
	$valor_final = $param_valor + ($percentual * $param_valor);
	//comissoes 1,99 + 2,90
	$percentual2 = 2.0 / 100.0;
	$valorTotal = $percentual2 * $param_valor;
	
	
	
	$finalTodos = $valor_final + $valorTotal + 3;

		return $finalTodos;
}

//valor com order de 0,30 

function valorDoBtcComEncargos30($param_valor3)
{

//pega o btc e soma valor final do btc com todos encargos

	$percentual = 0.30 / 100.0; // 15%
	$valor_final = $param_valor3 + ($percentual * $param_valor3);
	//comissoes 1,99 + 2,90
	$percentual2 = 2.0 / 100.0;
	$valorTotal = $percentual2 * $param_valor3;
	
	
	
	$finalTodos3 = $valor_final + $valorTotal + 3;

		return $finalTodos3;
}

//venda e saque liquido 

function valorDoBtcComEncargosSaque($param_valor)
{

//pega o btc e soma valor final do btc com todos encargos

	$percentual = 0.70 / 100.0; // 15%
	$valor_final = $param_valor - ($percentual * $param_valor);
	//comissoes 1,99 + 2,90
	$percentual2 = 2.0 / 100.0;
	$valorTotal = $percentual2 * $param_valor;
	
	
	
	$finalTodos = $valor_final - $valorTotal - 3;

		return $finalTodos;
}






//venda por normal
function vendaMercadobitcoinsNormal($var)
{
	$percentual = 0.70 / 100.0; // 15%
	$valor_final = $var - ($percentual * $var);

	return $valor_final;

}

//venda por orders
function vendaMercadobitcoinsOrder($var2)
{
	$percentual = 0.30 / 100.0; // 15%
	$valor_final2 = $var2 - ($percentual * $var2);

	return $valor_final2;

}







//mais 5 %
function blockCincoPor($param_cinco)
{

	//blockchain mais 5% porcento 
	$porcentual = 5.0 / 100.0;
	$valores = $param_cinco + ($porcentual * $param_cinco);

		return $valores;
}

//mais 8 %
function blockOitoPor($param_oito)
{

	//blockchain mais 8% porcento 
	$porcentual = 8.0 / 100.0;
	$valores = $param_oito + ($porcentual * $param_oito);

		return $valores;
}

//mais 10 %
function blockDezPor($param_dez)
{

	//blockchain mais 8% porcento 
	$porcentual = 10.0 / 100.0;
	$valores = $param_dez + ($porcentual * $param_dez);

		return $valores;
}

//mais 12 %
function blockDozePor($param_doze)
{

	//blockchain mais 8% porcento 
	$porcentual = 12.0 / 100.0;
	$valores = $param_doze + ($porcentual * $param_doze);

		return $valores;
}


	//maior Preco

	 function setMaiorPreco($paramMaiorPreco)
	 {

	 		$obj = new moedas();
	 		$formatado	= $obj->formatarValor($paramMaiorPreco);
	 		$this->maiorPreco = $formatado;
	 }

	 function getMaiorPreco()
	 {
	 	//return $this->maiorPreco;
	 	return $this->maiorPreco;
	 }

	 //menor Preço
	  function setMenorPreco($paramMenorPreco)
	 {
	 		$obj2 = new moedas();
	 		$formatado2	= $obj2->formatarValor($paramMenorPreco);
	 		$this->menorPreco = $paramMenorPreco;
	 }

	  function getMenorPreco()
	 {
	 	return $this->menorPreco;
	 }


	 //volume de bitcoins

	  function setVol($paramVol)
	 {
	 	    $obj3 = new moedas();
	 		$formatado3	= $obj3->formatarValor($paramVol);
	 		$this->vol = $paramVol;
	 }

	 function getVol()
	 {

	 	return $this->vol;
	 }

	 //ultimo negociador Maior
	  function setUltimonegociadoMaior($paramMaiorNegociado)
	 {

	 		$format = new moedas();

	 	$formatado4	= $format->formatarValor($paramMaiorNegociado);

	 		$this->ultimonegociadoMaior = $formatado4;
	 }

	  function getUltimonegociadoMaior()
	 {


	 	return $this->ultimonegociadoMaior;
	 }


	 //maior Preco oferta
	  function setMaiorPrecoOferta($paramMaiorprecoOferta)
	 {

	 	$obj4 = new moedas();
	 		$formatado5	= $obj4->formatarValor($paramMaiorprecoOferta);
	 		$this->maiorPrecoOferta = $paramMaiorprecoOferta;
	 }

	 function getMaiorPrecoOferta()
	 {

	 	return $this->maiorPrecoOferta;
	 }


	 //Menor Preco oferta
	  function setMenorPrecoOferta($paramMenorprecoOferta)
	 {

	 		$obj5 = new moedas();
	 		$formatado6	= $obj5->formatarValor($paramMenorprecoOferta);
	 		$this->menorPrecoOferta = $paramMenorprecoOferta;
	 }

	 function getMenorPrecoOferta()
	 {

	 	return $this->menorPrecoOferta;
	 }


	 //data da api
	   function setData($paramData)
	 {
	 		$this->data = $paramData;
	 }

	 function getData()
	 {

	 	return $this->data;
	 }


	 //formatar os preços


 

  

}//fim da classe 