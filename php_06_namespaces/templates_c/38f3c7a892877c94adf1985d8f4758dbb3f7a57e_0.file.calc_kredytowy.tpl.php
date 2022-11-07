<?php
/* Smarty version 4.2.1, created on 2022-10-28 18:58:58
  from 'H:\programy1\xampp\htdocs\aplikacje_sieciowe\php_04_szablony_smarty\app\calc_kredytowy.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_635c0a52dbc472_96777260',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38f3c7a892877c94adf1985d8f4758dbb3f7a57e' => 
    array (
      0 => 'H:\\programy1\\xampp\\htdocs\\aplikacje_sieciowe\\php_04_szablony_smarty\\app\\calc_kredytowy.tpl',
      1 => 1666976229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635c0a52dbc472_96777260 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1949995925635c0a52db1994_77360837', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'content'} */
class Block_1949995925635c0a52db1994_77360837 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1949995925635c0a52db1994_77360837',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section id ="one">
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
	</form>
</section>

<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['infos']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['infos']->value) > 0) {?> 
		<h4>Informacje: </h4>
		<ol class="inf">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
	<h4>Wynik:</h4>
	<p class="res">
	Kwota miesięcznej raty: <?php echo $_smarty_tpl->tpl_vars['result']->value;?>
 zł
	</p>
<?php }?>

</div>
</div>

<?php
}
}
/* {/block 'content'} */
}
