<?php /* Smarty version 3.1.24, created on 2016-07-17 18:23:20
         compiled from "view/inicio.php" */ ?>
<?php
/*%%SmartyHeaderCode:24104578bb0f81c02e0_02757120%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd13864d01e470ace5b345502d4c024098eb624a8' => 
    array (
      0 => 'view/inicio.php',
      1 => 1468772586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24104578bb0f81c02e0_02757120',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_578bb0f821f498_13115473',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_578bb0f821f498_13115473')) {
function content_578bb0f821f498_13115473 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '24104578bb0f81c02e0_02757120';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <?php echo $_smarty_tpl->getSubTemplate ("view/includes/head.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("view/includes/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("view/includes/footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</body>
</html><?php }
}
?>