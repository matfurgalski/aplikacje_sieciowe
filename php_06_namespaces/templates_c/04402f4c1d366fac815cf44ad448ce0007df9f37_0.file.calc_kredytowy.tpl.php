<?php
/* Smarty version 4.2.1, created on 2022-10-30 16:10:14
  from 'H:\programy1\xampp\htdocs\aplikacje_sieciowe\php_05_obiektowosc\app\calc_kredytowy.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_635e93d69e74a3_03975340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04402f4c1d366fac815cf44ad448ce0007df9f37' => 
    array (
      0 => 'H:\\programy1\\xampp\\htdocs\\aplikacje_sieciowe\\php_05_obiektowosc\\app\\calc_kredytowy.tpl',
      1 => 1667141244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635e93d69e74a3_03975340 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_626424364635e93d69dc4a5_68190279', 'content');
?>

		
	
</section>

	




<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'content'} */
class Block_626424364635e93d69dc4a5_68190279 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_626424364635e93d69dc4a5_68190279',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section id ="one">
	<div class="row gtr-50 gtr-uniform">
	<div class="col-6">
		
	<h4>Kalkulator kredytowy</h4>
	<form method="post" action="#one">
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
				<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
			<h4>Wystąpiły błędy: </h4>
			<ol class="err">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
			<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ol>
		<?php }?>
		
				<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
			<h4>Informacje: </h4>
			<ol class="inf">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
			<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ol>
		<?php }?>
		
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
