<?php
		$url ="http://charlescorrea.com.br/blog/tag/function";
		$dolar_americano_url = $url;
		$ch = curl_init();
		$timeout = 5;
		curl_setopt ($ch, CURLOPT_URL, $dolar_americano_url);
		curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
		ob_start();
		curl_exec($ch);
		curl_close($ch);
		$file_contents = ob_get_contents();
		ob_end_clean();
		return $file_contents;

		$dolar_americano = "http://dolarhoje.com/cotacao.txt";
		$conteudo = AbreDolarAmericano( $dolar_americano );
		echo "Dólar Americano Hoje: USD $conteudo";
?>