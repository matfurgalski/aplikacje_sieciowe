<?php
/* Smarty version 4.2.1, created on 2022-11-07 19:04:04
  from 'H:\programy1\xampp\htdocs\aplikacje_sieciowe\php_06_namespaces\app\views\calc_kredytowy.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63694894c617d7_71032116',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6dc62d77b175a9561f891b12168d9a436d50249c' => 
    array (
      0 => 'H:\\programy1\\xampp\\htdocs\\aplikacje_sieciowe\\php_06_namespaces\\app\\views\\calc_kredytowy.tpl',
      1 => 1667839206,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63694894c617d7_71032116 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205098433363694894abcb46_50308105', 'content');
?>

		
	
</section>

	




<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_205098433363694894abcb46_50308105 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_205098433363694894abcb46_50308105',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section id ="one">
	<div class="row gtr-50 gtr-uniform">
	<div class="col-6">
		
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
