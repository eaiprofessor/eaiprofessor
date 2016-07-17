<!DOCTYPE html>
<html>
<head>
    {include file="view/includes/head.php"}
</head>
<body>
{include file="view/includes/header.php"}

<section class="container">
    <form method="post" class="frm_cadastro">
        <input type="hidden" name="action" value="cadastrar_usuario">
        <input type="hidden" name="status_usuario" value="1">
        <input type="hidden" name="tipo_usuario" value="1">

        <label>
            <span>Nome:</span>
            <input type="text" name="nome_usuario"/>
        </label>
        <br/>
        <label>
            <span>E-mail:</span>
            <input type="text" name="email_usuario"/>
        </label>
        <br/>
        <label>
            <span>CPF:</span>
            <input type="text" name="cpf_usuario"/>
        </label>
        <br/>
        <label>
            <span>Senha:</span>
            <input type="password" name="senha_usuario"/>
        </label>

        <br/>
        <label>
            <input type="submit" name="enviar"/>
        </label>

    </form>
</section>

{include file="view/includes/footer.php"}
</body>
</html>
