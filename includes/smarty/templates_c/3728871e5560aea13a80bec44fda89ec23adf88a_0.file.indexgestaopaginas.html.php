<?php /* Smarty version 3.1.24, created on 2016-07-10 15:06:34
         compiled from "view/indexgestaopaginas.html" */ ?>
<?php
/*%%SmartyHeaderCode:170935782485a5d49b0_40203247%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3728871e5560aea13a80bec44fda89ec23adf88a' => 
    array (
      0 => 'view/indexgestaopaginas.html',
      1 => 1462975484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170935782485a5d49b0_40203247',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5782485a63ce67_94538062',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5782485a63ce67_94538062')) {
function content_5782485a63ce67_94538062 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '170935782485a5d49b0_40203247';
echo $_smarty_tpl->getSubTemplate ("view/inicio.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


Gestao Paginas (Aq conteúdo dinâmico)

<?php echo $_smarty_tpl->getSubTemplate ("view/fim.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>