<?php 





class TickerMercadobitcoins{


    public $high ;
    public $low ;
    public $vol;
    public $last;
    public $buy;
    public $sell;
    public $data;


    function formatarValor($param)
    {
        $result = number_format($param,2);
        $result = str_replace(".","",$result); //tira ponto 
        $result = str_replace(",","",$result); //tira virgula
        $result = substr($result, 0, -2);  // retorna "abcde"
        return  $result;
    }



    function SetHigh($param_hi)
    {

        $result = number_format($param_hi,2);
        $result = str_replace(".","",$result); //tira ponto 
        $result = str_replace(",","",$result); //tira virgula
        $result = substr($result, 0, -2);  // retorna "abcde"
        

        $this->high = $result;
    }

    function SetLow($param_low)
    {

        $result_low = number_format($param_low,2);
        $result_low = str_replace(".","",$result_low); //tira ponto 
        $result_low = str_replace(",","",$result_low); //tira virgula
        $result_low = substr($result_low, 0, -2);  // retorna "abcde"

        $this->low = $result_low;
    }

    function SetVol($param_vol)
    {
        $this->vol = $param_vol;
    }

    function SetLast($param_last)
    {

        $result_last = number_format($param_last,2);
        $result_last = str_replace(".","",$result_last); //tira ponto 
        $result_last = str_replace(",","",$result_last); //tira virgula
        $result_last = substr($result_last, 0, -2);  // retorna "abcde"

        $this->last = $result_last;
    }

    function SetBuy($param_buy)
    {
        $result_buy = number_format($param_buy,2);
        $result_buy = str_replace(".","",$result_buy); //tira ponto 
        $result_buy = str_replace(",","",$result_buy); //tira virgula
        $result_buy = substr($result_buy, 0, -2);  // retorna "abcde"
        $this->buy = $result_buy;
    }


    function SetSell($param_sell)
    {
        $result_sell = number_format($param_sell,2);
        $result_sell = str_replace(".","",$result_sell); //tira ponto 
        $result_sell = str_replace(",","",$result_sell); //tira virgula
        $result_sell = substr($result_sell, 0, -2);  // retorna "abcde"

        $this->sell = $result_sell;
    }
    
    function SetData($param_data)
    {
        $epoch = $param_data;
        $dt = new DateTime("@$epoch");  // convert UNIX timestamp to PHP DateTime
        $param_data = $dt->format('Y-m-d H:i:s'); // output = 2017-01-01 00:00:00

        $this->data = $param_data;
    }

    function getHigh()
    {
        return $this->high;
    }

    function getLow()
    {
        return $this->low;
    }

    function getVol()
    {
        return $this->vol;
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
    function getData()
    {
        return $this->data;
    }




}