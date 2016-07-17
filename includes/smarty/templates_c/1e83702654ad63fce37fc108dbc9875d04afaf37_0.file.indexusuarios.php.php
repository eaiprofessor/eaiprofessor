<?php /* Smarty version 3.1.24, created on 2016-05-11 15:59:28
         compiled from "G:/PLAO/PLAOlll/projetos/ini3cm/login3c/indexusuarios.php" */ ?>
<?php
/*%%SmartyHeaderCode:859057333ac0968e40_38513931%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e83702654ad63fce37fc108dbc9875d04afaf37' => 
    array (
      0 => 'G:/PLAO/PLAOlll/projetos/ini3cm/login3c/indexusuarios.php',
      1 => 1462975162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '859057333ac0968e40_38513931',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_57333ac0a1c944_79182602',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57333ac0a1c944_79182602')) {
function content_57333ac0a1c944_79182602 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '859057333ac0968e40_38513931';
echo '<?php

';?>require_once 'sm.php';
$sm->assign("nome","Usuario");
$sm->display("indexusuarios.php");

<?php }
}
?>