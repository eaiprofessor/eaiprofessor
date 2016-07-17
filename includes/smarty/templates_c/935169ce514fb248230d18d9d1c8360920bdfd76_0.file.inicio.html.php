<?php /* Smarty version 3.1.24, created on 2016-05-04 17:04:41
         compiled from "G:/PLAO/PLAOlll/projetos/ini3cm/login3c/view/inicio.php" */ ?>
<?php
/*%%SmartyHeaderCode:23522572a0f89e5bce6_13963664%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '935169ce514fb248230d18d9d1c8360920bdfd76' => 
    array (
      0 => 'G:/PLAO/PLAOlll/projetos/ini3cm/login3c/view/inicio.php',
      1 => 1462373393,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23522572a0f89e5bce6_13963664',
  'variables' => 
  array (
    'nome' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_572a0f89e8aae5_24331512',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_572a0f89e8aae5_24331512')) {
function content_572a0f89e8aae5_24331512 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '23522572a0f89e5bce6_13963664';
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Página Inicial de <?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <main>
            <section>
            <h1 style="text-align: center">Página Inicial <?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
</h1>
            <a href="index.php">Home - Page</a>
            |<a href="indexusuarios.php">Usuários</a>
            |<a href="indextipousuarios.php">Tipos de Usuários</a>
            |<a href="indexgestaopaginas.php">Gestão de Páginas</a>
            |<a href="indexgestaoconteudos.php">Gestão de Conteúdos</a>
            |<a href="frmlogin.php">Efetuar Login</a>
            |<a href="logout.php">Logout</a>
            </section>
            <hr/>
            <section><?php }
}
?>