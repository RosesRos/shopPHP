<?php
/* Smarty version 3.1.47, created on 2023-04-01 13:31:03
  from '/home/fabio/Desktop/shopPHP/resources/default/aside.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_642807e734fdf4_67631372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d1eb5a69dfdc3bd70f847603bab1e23888c8a22' => 
    array (
      0 => '/home/fabio/Desktop/shopPHP/resources/default/aside.tpl',
      1 => 1680345061,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642807e734fdf4_67631372 (Smarty_Internal_Template $_smarty_tpl) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['aside']) ? $_smarty_tpl->tpl_vars['aside']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["left"] = $_smarty_tpl->tpl_vars['rsCategories']->value;
$_smarty_tpl->_assignInScope('aside', $_tmp_array);?>
<section class="section">
    <article class="section_article">
            <aside class="section_aside" id="leftColumn">
                <?php $_smarty_tpl->_assignInScope('titleMenu', "<h2>menu site</h2>");?>
                <div>
                    <?php echo $_smarty_tpl->tpl_vars['titleMenu']->value;?>

                </div>
                <nav>
                                        <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['aside']->value['left'], 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                            <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></li>
                            <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['children']))) {?>
                                <ul>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'itemChild');
$_smarty_tpl->tpl_vars['itemChild']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->value) {
$_smarty_tpl->tpl_vars['itemChild']->do_else = false;
?>
                                        <li>--<a href="#"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a></li>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </nav>
                
            </aside>
    </article>
</section><?php }
}
