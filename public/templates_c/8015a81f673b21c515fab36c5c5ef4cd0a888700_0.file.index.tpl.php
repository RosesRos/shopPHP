<?php
/* Smarty version 3.1.47, created on 2023-03-19 16:24:56
  from '/home/fabio/Desktop/shopPHP/resources/default/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_64170d284ab480_77289244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8015a81f673b21c515fab36c5c5ef4cd0a888700' => 
    array (
      0 => '/home/fabio/Desktop/shopPHP/resources/default/index.tpl',
      1 => 1679232111,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64170d284ab480_77289244 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["last"] = "<h1>test coco name</h1>";
$_smarty_tpl->_assignInScope('name', $_tmp_array);?>
    <?php echo $_smarty_tpl->tpl_vars['name']->value['last'];?>

    
</body>
</html><?php }
}
