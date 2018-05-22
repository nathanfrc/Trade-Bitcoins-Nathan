<?php



class CoinMakeBitcoins 
{


   public $id;
   public  $name;
   public $symbol;
   public $rank;
   public  $price_usd;
   public  $price_btc;
   public   $volume_usd24;
   public  $market_cap_usd; 
   public $available_supply;
   public $total_supply;
   public   $max_supply;
   public   $percent_change_1h ;
   public   $percent_change_24h;
   public   $percent_change_7d;
   public $last_updated;






   //sets 
    function setId($param_id)
    {
        $this->id = $param_id;
    }
    function setName($param_name)
    {
        $this->name = $param_name;
    }

    function setSymbol($param_symbol)
    {
        $this->symbol = $param_syboml;
    }

    function setRank($param_rank)
    {
        $this->rank = $param_rank;
    }

    function setPrice_usd($param_price)
    {
        $this->price_usd = $param_price;
    }

    function setPrice_btc($param_btc)
    {
        $this->price_btc = $param_btc;
    }
    function setVolume_usd24($param_volume)
    {
        $this->volume_usd24 = $param_volume;
    }
    function setMarket_cap_usd($param_mark)
    {
        $this->market_cap_usd = $param_mark;
    }
    function setAvailable_supply($param_avai)
    {
        $this->available_suplly = $param_avai;
    }

    function setTotal_supply($param_total)
    {
        $this->total_supply = $param_total;
    }
    
    function setMax_supply($param_max_suppl)
    {
        $this->max_supply = $param_max_suppl;
    }

    function setPercent_change_1h($param_perc1)
    {
        $this->percent_change_1h = $param_perc1;
    }

    function setPercent_change_24h($param_perc24)
    {
        $this->percent_change_24h = $param_perc24;
    }
   
    function setPercent_change_7d($param_perc7d)
    {
        $this->percent_change_7d = $param_perc7d;
    }
    function setLast_updated($param_update)
    {
        $this->last_updated = $param_update;
    }
    
//=================================================================================

//gets 


function getId()
{
    return $this->id;
}

function getName()
{
    return $this->name;
}
function getSymbol()
{
    return $this->symbol;
}
function getRank()
{
    return $this->rank;
}

function getPrice_usd()
{
    return $this->price_usd;
}

function getPrice_btc()
{
    return $this->price_btc;
}

function getVolume_usd24()
{
    return $this->volume_usd24;
}
function getMarket_cap_usd()
{
    return $this->market_cap_usd;
}

function getAvailable_supply()
{
    return $this->available_supply;
}

function getTotal_supply()
{
    return $this->total_supply;
}

function getMax_supply()
{
    return $this->max_supply;
}

function getPercent_change_1h()
{
    return $this->percent_change_1h;
}

function getPercent_change_24h()
{
    return $this->percent_change_24h;
}
function getPercent_change_7d()
{
    return $this->percent_change_7d;
}

function getLast_updated()
{
    return $this->last_updated;
}


//metodos 

function RetornaFalta()
{

   $total = $this->max_supply - $this->total_supply;
   return $total;

}




}