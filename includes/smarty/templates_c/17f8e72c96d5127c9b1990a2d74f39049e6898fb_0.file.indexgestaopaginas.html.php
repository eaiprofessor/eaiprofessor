<?php /* Smarty version 3.1.24, created on 2016-05-11 16:06:40
         compiled from "view/indexgestaopaginas.html" */ ?>
<?php
/*%%SmartyHeaderCode:2171857333c703c57a1_66995316%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17f8e72c96d5127c9b1990a2d74f39049e6898fb' => 
    array (
      0 => 'view/indexgestaopaginas.html',
      1 => 1462975482,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2171857333c703c57a1_66995316',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_57333c7046d721_79893708',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57333c7046d721_79893708')) {
function content_57333c7046d721_79893708 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2171857333c703c57a1_66995316';
echo $_smarty_tpl->getSubTemplate ("view/inicio.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


Gestao Paginas (Aq conteúdo dinâmico)

<?php echo $_smarty_tpl->getSubTemplate ("view/fim.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>