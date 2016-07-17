<?php /* Smarty version 3.1.24, created on 2016-07-17 19:29:59
         compiled from "view/inicio.php" */ ?>
<?php
/*%%SmartyHeaderCode:9080578bc097062538_60950531%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a4f9bc9391107919b23f1ab5825e1c070e18e9b' => 
    array (
      0 => 'view/inicio.php',
      1 => 1468776595,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9080578bc097062538_60950531',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_578bc0970efd05_32880637',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_578bc0970efd05_32880637')) {
function content_578bc0970efd05_32880637 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9080578bc097062538_60950531';
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
    
    <img src="view/files/images/aaa.jpg" />
    <?php echo $_smarty_tpl->getSubTemplate ("view/includes/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <?php echo $_smarty_tpl->getSubTemplate ("view/includes/footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</body>
</html><?php }
}
?>