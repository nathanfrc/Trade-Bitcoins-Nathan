<script>

$(function(){
    
    //submit
    // pegando o formulário quando o usuário clicar em "logar"
    $("#form-calculo").submit(function(evento){
        // evitando que o evento faça refresh na página
        evento.preventDefault();
        
        // pegando todos os campos do formulário e montando um array de campos para enviar para o servidor
        var campos = $(this).serialize();
        
        $.ajax({
            data: campos,// dados que serão enviados para o servidor
            url: "recebeDadosCalculo.php", // url a buscar sem fazer refresh (ajax)
            type: "POST", // método de envio dos dados (GET,POST)
            dataType: "html", // como será recebida a resposta do servidor (html,json)
            success: function(data){ // função que tras a resposta quando tudo der certo
                $("#reposta").html(data);
                    
               //envia para pagina quando for verdadeiro
               // window.location.href="?pagina=painel";
            },
            error: function(){
                alert("problema ao carregar a solicitação");
            }
        });
        
    });

});

</script>