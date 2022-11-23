<?php
/* Smarty version 4.2.1, created on 2022-11-23 21:37:01
  from 'H:\programy1\xampp\htdocs\aplikacje_sieciowe\php_08_bd\app\views\Lista.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_637e846d9069f9_78203994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1d8ad4762af75e5b9ff528782ba68d85b5f8cdb' => 
    array (
      0 => 'H:\\programy1\\xampp\\htdocs\\aplikacje_sieciowe\\php_08_bd\\app\\views\\Lista.tpl',
      1 => 1669235819,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_637e846d9069f9_78203994 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_304938415637e846d8fe727_07473045', 'content');
?>

</section><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_304938415637e846d8fe727_07473045 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_304938415637e846d8fe727_07473045',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section id ="one">

	<div class="pure-menu pure-menu-horizontal bottom-margin">

	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
#one"  class="pure-menu-heading pure-menu-link">powrót</a>
	
</div>

<table id="tab_people" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>idWynik</th>
		<th>kwota</th>
		<th>procent</th>
		<th>lata</th>
        <th>rata</th>
        <th>data</th>
	</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wynik']->value, 'w');
$_smarty_tpl->tpl_vars['w']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['w']->value) {
$_smarty_tpl->tpl_vars['w']->do_else = false;
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['w']->value["idwynik"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['w']->value["kwota"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['w']->value["procent"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['w']->value["lat"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['w']->value["rata"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['w']->value["data"];?>
</td></tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table>

<?php
}
}
/* {/block 'content'} */
}
