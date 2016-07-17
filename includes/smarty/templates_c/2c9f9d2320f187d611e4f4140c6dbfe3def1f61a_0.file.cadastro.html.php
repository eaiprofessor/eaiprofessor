<?php /* Smarty version 3.1.24, created on 2016-07-16 18:36:14
         compiled from "view/cadastro.html" */ ?>
<?php
/*%%SmartyHeaderCode:24555578a627e26f3d4_23362736%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c9f9d2320f187d611e4f4140c6dbfe3def1f61a' => 
    array (
      0 => 'view/cadastro.html',
      1 => 1468686965,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24555578a627e26f3d4_23362736',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_578a627e2c17a5_44824964',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_578a627e2c17a5_44824964')) {
function content_578a627e2c17a5_44824964 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '24555578a627e26f3d4_23362736';
?>
<!DOCTYPE html>
<html>
<head>
    <?php echo $_smarty_tpl->getSubTemplate ("view/includes/head.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("view/includes/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


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

<?php echo $_smarty_tpl->getSubTemplate ("view/includes/footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</body>
</html>
<?php }
}
?>