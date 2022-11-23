{extends file="main.tpl"}


{block name=content}
<section id ="one">

	<div class="pure-menu pure-menu-horizontal bottom-margin">

	<a href="{$conf->action_url}#one"  class="pure-menu-heading pure-menu-link">powrót</a>
	
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
{foreach $wynik as $w}
{strip}
	<tr>
		<td>{$w["idwynik"]}</td>
		<td>{$w["kwota"]}</td>
		<td>{$w["procent"]}</td>
        <td>{$w["lat"]}</td>
        <td>{$w["rata"]}</td>
        <td>{$w["data"]}</td>
	
	</tr>
{/strip}
{/foreach}
</tbody>
</table>

{/block}
</section>