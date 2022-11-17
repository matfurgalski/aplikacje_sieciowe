
{extends file="main.tpl"}


{block name=content}



<section id ="one">
	<div class="row gtr-50 gtr-uniform">
	<div class="col-6">

	<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="{$conf->action_url}logout&#one"  class="pure-menu-heading pure-menu-link">wyloguj</a>
	
</div>

		
	<h4>Kalkulator kredytowy</h4>
	<form method="post" action="{$conf->action_root}calcCompute&#one">
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
<span style="float:right;">użytkownik: {$user->login}, rola: {$user->role}</span>
	{include file='messages.tpl'}
		

		
		{if isset($res->result)}
			<h4>Wynik:</h4>
			<p class="res">
				Kwota miesięcznej raty: {$res->result} zł
			</p>
		{/if}
		
		</div>
		</div>
		</div>
		</div>
		
		{/block}
		
	
</section>

	




