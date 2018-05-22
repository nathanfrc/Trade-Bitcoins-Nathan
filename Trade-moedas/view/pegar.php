
<?php
 // Endereço do site
 $url = 'https://biscoint.io/bitcoin/price-comparison/buy/single-exchange';

 // Pegando dados do Site e colocando em uma String
 $dadosSite = file_get_contents($url);

 // Exibindo o retorno
 echo $dadosSite;
?>