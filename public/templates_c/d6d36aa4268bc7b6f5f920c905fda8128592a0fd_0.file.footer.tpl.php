<?php
/* Smarty version 3.1.47, created on 2023-03-20 15:18:11
  from '/home/fabio/Desktop/shopPHP/resources/default/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_64184f03e2ebc0_11245540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6d36aa4268bc7b6f5f920c905fda8128592a0fd' => 
    array (
      0 => '/home/fabio/Desktop/shopPHP/resources/default/footer.tpl',
      1 => 1679314443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64184f03e2ebc0_11245540 (Smarty_Internal_Template $_smarty_tpl) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['footer']) ? $_smarty_tpl->tpl_vars['footer']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["last"] = "<h1>footer page</h1>";
$_smarty_tpl->_assignInScope('footer', $_tmp_array);?>
    <footer class="footer">
        <article class="footer_article">
            <div class="footer_container">
                <div class="footer_footer" id="footer">
                    <?php echo $_smarty_tpl->tpl_vars['footer']->value['last'];?>

                </div>
            </div>
        </article>
    </footer>

    
</body>
</html><?php }
}
