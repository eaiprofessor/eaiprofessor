<?php /* Smarty version 3.1.24, created on 2016-07-16 17:00:52
         compiled from "C:/Users/igorc/OneDrive/codigosPHP/login3c/view/includes/header.php" */ ?>
<?php
/*%%SmartyHeaderCode:31657578a4c248fe052_83952790%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5126510d9e344852b0ef0fb228e0121e780635b' => 
    array (
      0 => 'C:/Users/igorc/OneDrive/codigosPHP/login3c/view/includes/header.php',
      1 => 1468680971,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31657578a4c248fe052_83952790',
  'variables' => 
  array (
    'nome' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_578a4c24904587_79110211',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_578a4c24904587_79110211')) {
function content_578a4c24904587_79110211 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '31657578a4c248fe052_83952790';
?>
<header>
    <h1 style="text-align: center">Página Inicial <?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
</h1>
    <a href="index.php">Home - Page</a>
    <a href="cadastro.php">Cadastro</a>
</header><?php }
}
?>