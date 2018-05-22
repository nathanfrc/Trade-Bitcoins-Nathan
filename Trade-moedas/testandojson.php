

<?php






$json_file = file_get_contents("https://api.coinmarketcap.com/v1/ticker/bitcoin/");   
$json_str = json_decode($json_file, true);
//$itens = $json_str['bitcoin'];

foreach ( $json_str as $e ) 
    { 
        
        echo $e['id']."<br>";
        echo $e['name']."<br>";
        echo $e['symbol']."<br>";
        echo $e['rank']."<br>";
        echo $e['price_usd']."<br>";
        echo $e['price_btc']."<br>";
        echo $e['24h_volume_usd']."<br>";
        echo $e['market_cap_usd']."<br>";
        echo $e['available_supply']."<br>";
        echo $e['total_supply']."<br>";
        echo $e['max_supply']."<br>";
        echo $e['percent_change_1h']."<br>";
        echo $e['percent_change_24h']."<br>";
        echo $e['percent_change_7d']."<br>";
        echo $e['last_updated']."<br>";
        
    } 