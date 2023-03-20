<?php
/* Smarty version 3.1.47, created on 2023-03-20 15:28:43
  from '/home/fabio/Desktop/shopPHP/resources/default/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6418517b60fa22_72463838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f95200a0b2be4eb6d0343551c31d072a298719be' => 
    array (
      0 => '/home/fabio/Desktop/shopPHP/resources/default/header.tpl',
      1 => 1679315311,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./aside.tpl' => 1,
  ),
),false)) {
function content_6418517b60fa22_72463838 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_GET['controller'];?>
</title>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/styles/main.css"/>
</head>
<body>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["last"] = "<h1 class='red'>My Shop - online shop</h1>";
$_smarty_tpl->_assignInScope('name', $_tmp_array);?>
    <header class="header">
        <article class="header_article">
            <div class="header_container">
                <div class="header_header" id="header">
                    <?php echo $_smarty_tpl->tpl_vars['name']->value['last'];?>

                </div>
            </div>
        </article>
    </header>

    <?php ob_start();
$_smarty_tpl->_subTemplateRender("file:./aside.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->assign('aside', ob_get_clean());
?>
    <?php echo $_smarty_tpl->tpl_vars['aside']->value;
}
}
