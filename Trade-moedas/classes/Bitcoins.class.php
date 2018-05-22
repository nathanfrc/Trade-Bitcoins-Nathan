<?php 




 class BitcoinsBlockchain {

        public $last;
        public $lastbuy;
        public $sell;
        public $symbol;



        function setLast($paramLast)
        {

            $this->$last = $paramLast;
        }

        function getLast()
        {
            return $this->last;
        }

        function setLastbuy($paramLastbuy)
        {
            $this->$lastbuy = $paramLastbuy;
        }

        function getLastbuy()
        {
            return $this->lastbuy;
        }

        function setSell($paramSell)
        {

            $this->sell = $paramSell;
        }


 }


