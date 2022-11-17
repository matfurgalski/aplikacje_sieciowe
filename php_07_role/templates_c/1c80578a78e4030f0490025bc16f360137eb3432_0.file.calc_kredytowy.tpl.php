<?php
/* Smarty version 4.2.1, created on 2022-11-17 17:47:14
  from 'H:\programy1\xampp\htdocs\aplikacje_sieciowe\php_07_ochrona_dostepu\app\views\calc_kredytowy.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63766592a02873_46176483',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c80578a78e4030f0490025bc16f360137eb3432' => 
    array (
      0 => 'H:\\programy1\\xampp\\htdocs\\aplikacje_sieciowe\\php_07_ochrona_dostepu\\app\\views\\calc_kredytowy.tpl',
      1 => 1668703633,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_63766592a02873_46176483 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1492425873637665929fb7e8_84901478', 'content');
?>

		
	
</section>

	




<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1492425873637665929fb7e8_84901478 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1492425873637665929fb7e8_84901478',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<section id ="one">
	<div class="row gtr-50 gtr-uniform">
	<div class="col-6">

	<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout&#one"  class="pure-menu-heading pure-menu-link">wyloguj</a>
	
</div>

		
	<h4>Kalkulator kredytowy</h4>
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute&#one">
		<div class="row gtr-uniform">
			<div class="col-7 col-12-xsmall">
				<label for="id_x">Kwota: </label>
				<input type="text" name="x" id="demo-name" value="" placeholder="Kwota" />
			</div>
			
			<div class="col-7 col-12-xsmall">
				<label for="id_op">Oprocentowanie: </label>
				<input type="text" name="op" id="demo-name" value="" placeholder="Oprocentowanie" />
			</div>

			<div class="col-7 col-12-xsmall">
				<label for="id_y">Ile lat: </label>	
				<input type="text" name="y" id="demo-name" value="" placeholder="Ile lat" />
			</div>
			<div class="col-12">
				<ul class="actions">
					<li><input type="submit" value="Oblicz" class="primary" /></li>

				</ul>
			</div>
		</div>
		</div>
	</form>
	
	
	<div class="col-6">
<span style="float:right;">użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</span>
	<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		

		
		<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
			<h4>Wynik:</h4>
			<p class="res">
				Kwota miesięcznej raty: <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>
 zł
			</p>
		<?php }?>
		
		</div>
		</div>
		</div>
		</div>
		
		<?php
}
}
/* {/block 'content'} */
}
