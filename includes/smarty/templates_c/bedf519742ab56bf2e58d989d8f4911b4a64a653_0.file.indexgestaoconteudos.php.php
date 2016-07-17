<?php /* Smarty version 3.1.24, created on 2016-05-11 16:05:08
         compiled from "G:/PLAO/PLAOlll/projetos/ini3cm/login3c/indexgestaoconteudos.php" */ ?>
<?php
/*%%SmartyHeaderCode:428357333c14a9c186_36139460%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bedf519742ab56bf2e58d989d8f4911b4a64a653' => 
    array (
      0 => 'G:/PLAO/PLAOlll/projetos/ini3cm/login3c/indexgestaoconteudos.php',
      1 => 1462975162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '428357333c14a9c186_36139460',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_57333c14b15302_42472832',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57333c14b15302_42472832')) {
function content_57333c14b15302_42472832 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '428357333c14a9c186_36139460';
?>
 <?php echo '<?php

 ';?>require_once 'sm.php';
$sm->assign("nome","Gestão Conteúdos");
$sm->display("indexgestaoconteudos.php");  

<?php }
}
?>