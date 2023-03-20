<?php
/* Smarty version 3.1.47, created on 2023-03-20 15:28:53
  from '/home/fabio/Desktop/shopPHP/resources/default/coco.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_641851850597b4_34693590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5bc6d691d960dfde0b9575cd5b31344f062d2045' => 
    array (
      0 => '/home/fabio/Desktop/shopPHP/resources/default/coco.tpl',
      1 => 1679315306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_641851850597b4_34693590 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php ob_start();
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->assign('header', ob_get_clean());
?>
    <?php echo $_smarty_tpl->tpl_vars['header']->value;?>



    <?php $_smarty_tpl->_assignInScope('tes', "<span>action ".((string)$_GET['action'])."</span>");?>
    <section class="section">
        <article class="section_article">
            <div class="section_container">
                <div class="section_inner">
                    <h2><?php echo $_smarty_tpl->tpl_vars['tes']->value;?>
</h2>
                </div>
            </div>
        </article>
    </section>

    <?php ob_start();
$_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->assign('footer', ob_get_clean());
?>
    <?php echo $_smarty_tpl->tpl_vars['footer']->value;
}
}
