<?php /* Smarty version 3.1.24, created on 2016-07-16 16:53:24
         compiled from "C:/Users/igorc/OneDrive/codigosPHP/login3c/view/inicio.html" */ ?>
<?php
/*%%SmartyHeaderCode:19682578a4a64779b52_18184485%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6da4561f5da090ba2039a7d5b5b042fbae734658' => 
    array (
      0 => 'C:/Users/igorc/OneDrive/codigosPHP/login3c/view/inicio.html',
      1 => 1468680802,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19682578a4a64779b52_18184485',
  'variables' => 
  array (
    'nome' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_578a4a647bca07_43921793',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_578a4a647bca07_43921793')) {
function content_578a4a647bca07_43921793 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19682578a4a64779b52_18184485';
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
                    <a href="cadastro.php">Cadastro</a>
                </section>
                <hr/>
            <section><?php }
}
?>