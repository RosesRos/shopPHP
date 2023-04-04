<?php
/* Smarty version 3.1.47, created on 2023-04-04 11:10:02
  from '/home/fabio/Desktop/shopPHP/resources/default/category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_642bdb5a0d1e08_91332796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '424464c4da00b30061546914aa05e0ac17a7535f' => 
    array (
      0 => '/home/fabio/Desktop/shopPHP/resources/default/category.tpl',
      1 => 1680595799,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_642bdb5a0d1e08_91332796 (Smarty_Internal_Template $_smarty_tpl) {
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

    

    <section class="section">
        <article class="section_article">
                <aside class="section_aside" id="leftColumn">
                    <?php $_smarty_tpl->_assignInScope('titleMenu', $_smarty_tpl->tpl_vars['rsCategory']->value['name']);?>
                    <div>
                        <h1><?php echo $_smarty_tpl->tpl_vars['titleMenu']->value;?>
</h1>
                    </div>
                    <nav>
                                            </nav>
                    
                </aside>
        </article>
    </section>

    <?php ob_start();
$_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->assign('footer', ob_get_clean());
?>
    <?php echo $_smarty_tpl->tpl_vars['footer']->value;?>


    <?php }
}
