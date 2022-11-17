<?php
/* Smarty version 4.2.1, created on 2022-11-17 17:37:25
  from 'H:\programy1\xampp\htdocs\aplikacje_sieciowe\php_07_ochrona_dostepu\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63766345e707a2_32391439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05b9045c06a2c3c0e0c486360729455a1a6a74e9' => 
    array (
      0 => 'H:\\programy1\\xampp\\htdocs\\aplikacje_sieciowe\\php_07_ochrona_dostepu\\app\\views\\LoginView.tpl',
      1 => 1668703045,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_63766345e707a2_32391439 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_119970205863766345e6c838_68709372', 'content');
?>

</section>
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_119970205863766345e6c838_68709372 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_119970205863766345e6c838_68709372',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section id ="one">
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login#one" method="post"  class="pure-form pure-form-aligned bottom-margin">
	<legend>Logowanie do systemu</legend>
	<fieldset>
        <div class="pure-control-group">
			<label for="id_login">login: </label>
			<input id="id_login" type="text" name="login"/>
		</div>
        <div class="pure-control-group">
			<label for="id_pass">hasło: </label>
			<input id="id_pass" type="password" name="pass" /><br />
		</div>
		<div class="pure-controls">
			<input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>
		</div>
	</fieldset>
</form>	

<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'content'} */
}
