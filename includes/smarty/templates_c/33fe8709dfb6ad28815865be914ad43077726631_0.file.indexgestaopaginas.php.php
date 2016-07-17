<?php /* Smarty version 3.1.24, created on 2016-05-11 16:05:06
         compiled from "G:/PLAO/PLAOlll/projetos/ini3cm/login3c/indexgestaopaginas.php" */ ?>
<?php
/*%%SmartyHeaderCode:2695457333c12ddf620_06026715%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33fe8709dfb6ad28815865be914ad43077726631' => 
    array (
      0 => 'G:/PLAO/PLAOlll/projetos/ini3cm/login3c/indexgestaopaginas.php',
      1 => 1462975162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2695457333c12ddf620_06026715',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_57333c12e4cc26_30776820',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57333c12e4cc26_30776820')) {
function content_57333c12e4cc26_30776820 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2695457333c12ddf620_06026715';
echo '<?php

';?>require_once 'sm.php';
$sm->assign("nome","Gestão Páginas");
$sm->display("indexgestaopaginas.php");



<?php }
}
?>