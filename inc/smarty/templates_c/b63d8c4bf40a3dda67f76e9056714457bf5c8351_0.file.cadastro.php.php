<?php /* Smarty version 3.1.24, created on 2016-07-17 19:02:07
         compiled from "view/cadastro.php" */ ?>
<?php
/*%%SmartyHeaderCode:2750578bba0f494387_65884270%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b63d8c4bf40a3dda67f76e9056714457bf5c8351' => 
    array (
      0 => 'view/cadastro.php',
      1 => 1468774924,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2750578bba0f494387_65884270',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_578bba0f4e5387_57750039',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_578bba0f4e5387_57750039')) {
function content_578bba0f4e5387_57750039 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2750578bba0f494387_65884270';
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