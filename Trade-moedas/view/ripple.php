<?php

//Criando a url para o aquivo json
  $jsonurl = '[
    {
        "id": "ripple", 
        "name": "Ripple", 
        "symbol": "XRP", 
        "rank": "4", 
        "price_usd": "1.1025", 
        "price_btc": "0.00006912", 
        "24h_volume_usd": "659123000.0", 
        "market_cap_usd": "42709907194.0", 
        "available_supply": "38739144847.0", 
        "total_supply": "99993093880.0", 
        "max_supply": "100000000000", 
        "percent_change_1h": "0.45", 
        "percent_change_24h": "5.03", 
        "percent_change_7d": "39.98", 
        "last_updated": "1514322541"
    }
]';

   //$json = file_get_contents($jsonurl,0,null,null);

    //Retorna o conteudo do arquivo em formato de string
 $objeto_php = json_decode($jsonurl);

  echo $objeto_php[1];


