<?php /* Smarty version 3.1.24, created on 2016-05-11 16:06:37
         compiled from "view/indexusuarios.html" */ ?>
<?php
/*%%SmartyHeaderCode:424857333c6da6f301_97427209%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2ebf1d749c36e8a219d1437741694c946b20886' => 
    array (
      0 => 'view/indexusuarios.html',
      1 => 1462975482,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '424857333c6da6f301_97427209',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_57333c6db6d186_43235398',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57333c6db6d186_43235398')) {
function content_57333c6db6d186_43235398 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '424857333c6da6f301_97427209';
echo $_smarty_tpl->getSubTemplate ("view/inicio.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


Usuarios (Aq conteúdo dinâmico)

<?php echo $_smarty_tpl->getSubTemplate ("view/fim.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>