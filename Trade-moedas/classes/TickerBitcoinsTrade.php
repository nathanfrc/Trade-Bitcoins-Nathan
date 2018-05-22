<?php 



class TickerBitcoinsTrade{

    public $high;
    public $low;
    public $volume;
    public $trades_quantity;
    public $last;
    public $buy;
    public $sell;
    public $dates;

    function setHigh($param_high)
    {
            $this->high = $param_high;
    }

    function setLow($param_low)
    {

        $this->low = $param_low;
    }

    function setVolume($param_volume)
    {
            $this->volume = $param_volume;
    }

    function setTrades_quantity($param_trade)
    {

        $this->trades_quantity = $param_trade;
    }

    function setLast($param_last)
    {
        $this->last = $param_last;
    }

    function setBuy($param_buy)
    {
        $this->buy = $param_buy;
    }

    function setSell($param_sell)
    {
        $this->sell = $param_sell;
    }

    function setDates($param_date)
    {
        $this->dates = $param_date;
    }

    
   
  
  
   
    //get 

    function getHigh()
    {
        return $this->high;
    }

    function getLow()
    {
        return $this->low;
    }
    function getVolume()
    {
        return $this->volume;
    }

    function getTrades_quantity()
    {
        return $this->trades_quantity;
    }

    function getLast()
    {
        return $this->last;
    }
    function getBuy()
    {
        return $this->buy;
    }

    function getSell()
    {
        return $this->sell;
    }

    function getDates()
    {
        return $this->dates;
    }


}