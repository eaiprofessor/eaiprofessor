$(document).ready(function(){

    // cadastrar usuario
    frmCadastro = $('.frm_cadastro');

    //quando o formulario for enviado chama a função
    frmCadastro.submit(function(){
        //alert();
        //após validar chamar ajax para cadastro
        //url: 'url.php' - informa para onde os dados serão enviado
        //type: 'post' informa qual tipo de envio de dados (post|get)
        //data: - envia os dados do formulario
        //success: retorna os dados caso o ajax tenha tido sucesso
        //error: retorna os dados caso o ajax não tenha sido processado corretamente
        sender = $(this).serialize();
        $.ajax({
            url: 'php/php_usuario.php',
            type: 'POST',
            data: sender,
            success: function (resposta) {
                console.log(resposta);
            },
            error: function () {
                alert('erro');
            }
        });

        return false;
    });

});