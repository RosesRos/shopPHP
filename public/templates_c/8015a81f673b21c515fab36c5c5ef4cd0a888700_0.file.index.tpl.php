<?php
/* Smarty version 3.1.47, created on 2023-03-21 16:42:39
  from '/home/fabio/Desktop/shopPHP/resources/default/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6419b44f857a35_42499705',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8015a81f673b21c515fab36c5c5ef4cd0a888700' => 
    array (
      0 => '/home/fabio/Desktop/shopPHP/resources/default/index.tpl',
      1 => 1679406158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_6419b44f857a35_42499705 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php ob_start();
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->assign('header', ob_get_clean());
?>
    <?php echo $_smarty_tpl->tpl_vars['header']->value;?>



    <section class="section">
        <article class="section_article">
                <div class="section_container">
                    <div class="section_inner" id="centerColumn">
                            <h1>center block</h1>
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
