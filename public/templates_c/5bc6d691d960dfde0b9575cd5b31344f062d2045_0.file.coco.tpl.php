<?php
/* Smarty version 3.1.47, created on 2023-03-19 16:54:33
  from '/home/fabio/Desktop/shopPHP/resources/default/coco.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_641714194b6d78_28292632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5bc6d691d960dfde0b9575cd5b31344f062d2045' => 
    array (
      0 => '/home/fabio/Desktop/shopPHP/resources/default/coco.tpl',
      1 => 1679234010,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641714194b6d78_28292632 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_GET['action'];?>
</title>
</head>
<body>
    <?php $_smarty_tpl->_assignInScope('tes', "<span>action test</span>");?>
    <?php echo $_smarty_tpl->tpl_vars['tes']->value;?>

</body>
</html><?php }
}
