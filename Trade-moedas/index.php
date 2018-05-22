<?php

require "controller/HomeController.php";

$pagina = isset($_GET["pagina"]) ? $_GET["pagina"] : "index";

$ctrl = new HomeController();

switch($pagina) {
    case "index" : 
    $ctrl->Index();
    break;
     case "bitcoins" : 
    $ctrl->Bitcoins();
    break;
    case "bitcoinsCash" : 
    $ctrl->BitcoinsCash();
    break;
    case "ethereum" : 
    $ctrl->Ethereum();
    break;
    case "litcoins" : 
    $ctrl->Litcoins();
    break;
    case "ripple" : 
    $ctrl->Ripples();
    break;
    case "dogecoin" : 
    $ctrl->Dogecoin();
    break;
    case "verge" : 
    $ctrl->Verge();
    break;
    case "cardano" : 
    $ctrl->Cardano();
    break;
    case "mercadoBitcoins" : 
    $ctrl->MercadoBitcoins();
    break;
    case "graficoMercado";
    $ctrl->GraficoMercado();
    break;
    case "casasDeCambio";
    $ctrl->CasasDeCambios();
    break;
    case "tradeBitcoins";
    $ctrl->TradeBitcoins();
    break;
	case "logout":
	$ctrl->Logout();
	break;


}