<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <title>Atualizar DIV de segundos em segundos com PHP/JQuery/AJAX</title>

    <?php include "estrutura/biblioteca.php" ?>
    <?php include "estrutura/MenuTop.php" ?>

    <script type="text/javascript">

        // Função responsável por atualizar as frases
        function atualizar()
        {
            // Fazendo requisição AJAX
            $.post('recebeDados.php', function (frase) {

                // Exibindo frase
                $('#frase').html('<i>' + frase.texto + '</i><br />' + frase.autor);

            }, 'JSON');
        }

        // Definindo intervalo que a função será chamada
        setInterval("atualizar()", 10000);

        // Quando carregar a página
        $(function() {
            // Faz a primeira atualização
            atualizar();
        });

    </script>

</head>

<body>

<div class="container">

    <h1>Frases sortidas</h1>

    <div id="frase"></div>

</div>

</body>
</html>