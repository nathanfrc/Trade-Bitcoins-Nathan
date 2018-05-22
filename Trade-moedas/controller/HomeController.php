<?php

//require "model/negocios/ValidacionLogin.class.php";

class HomeController
{
    public function Index()
    {
        include "view/Index.php";
    }

    public function Bitcoins()
    {

    	include "view/bitcoins/bitcoins.php";
    }

    public function BitcoinsCash()
    {

    	include "view/bitcoins-cash/bitcoins-cash.php";
    }

    public function Ethereum()
    {

    	include "view/ethereum/ethereum.php";
    }

    public function Litcoins()
    {

    	include "view/litcoins/litcoins.php";
    }

    public function Ripples()
    {

    	include "view/ripple/ripple.php";
    }

    public function Dogecoin()
    {

    	include "view/dogecoin/dogecoin.php";
    }
    public function Verge()
    {
    	include "view/verge/verge.php";
    }
    public function Cardano()
    {
    	include "view/cardano/cardano.php";
    }
    public function MercadoBitcoins()
    {

    	include "view/exchanges-Brasileiras/mercadobitcoins.php";
    }

    public function GraficoMercado()
    {

    	include "view/exchanges-Brasileiras/graficoMercado.php";
    }

    public function CasasDeCambios()
    {
    	include "view/exchanges-Brasileiras/CasasDeCambio.php";
    }

    public function TradeBitcoins()
    {
            include "view/exchanges-Brasileiras/bitcoinTrade.php";

    }



 }   