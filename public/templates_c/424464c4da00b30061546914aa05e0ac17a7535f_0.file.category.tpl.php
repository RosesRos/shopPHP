<?php
/* Smarty version 3.1.47, created on 2023-04-05 10:24:57
  from '/home/fabio/Desktop/shopPHP/resources/default/category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_642d2249c33f60_41168728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '424464c4da00b30061546914aa05e0ac17a7535f' => 
    array (
      0 => '/home/fabio/Desktop/shopPHP/resources/default/category.tpl',
      1 => 1680679373,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_642d2249c33f60_41168728 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php ob_start();
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->assign('header', ob_get_clean());
?>
    <?php echo $_smarty_tpl->tpl_vars['header']->value;?>


    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['products']) ? $_smarty_tpl->tpl_vars['products']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["center"] = $_smarty_tpl->tpl_vars['rsProducts']->value;
$_smarty_tpl->_assignInScope('products', $_tmp_array);?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['ChildCat']) ? $_smarty_tpl->tpl_vars['ChildCat']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["cat"] = $_smarty_tpl->tpl_vars['rsChildCat']->value;
$_smarty_tpl->_assignInScope('ChildCat', $_tmp_array);?>

    <section class="section">
        <article class="section_article">
                <div class="section_container">
                    <div class="section_inner" id="centerColumn">
                            <div>
                                <h1><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</h1>
                            </div>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value['center'], 'product', false, NULL, 'products', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
?>
                                <div class="c_items">
                                    <a href="/product/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">
                                        <img src="/img/products/<?php echo $_smarty_tpl->tpl_vars['product']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
"/>
                                    </a>
                                    <br/>
                                    <a href="/product/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</a>
                                </div>
                                <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null) % 3 == 0) {?>
                                    <div class="c_clear"></div>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            <div>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ChildCat']->value['cat'], 'child', false, NULL, 'ChildCats', array (
));
$_smarty_tpl->tpl_vars['child']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->do_else = false;
?>
                                    <h1><a href="/category/<?php echo $_smarty_tpl->tpl_vars['child']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['child']->value['name'];?>
</a></h1>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                    </div>
                </div>
        </article>
    </section>

    <?php ob_start();
$_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->assign('footer', ob_get_clean());
?>
    <?php echo $_smarty_tpl->tpl_vars['footer']->value;?>


    <?php }
}
