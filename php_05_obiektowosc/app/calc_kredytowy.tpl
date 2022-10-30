
{extends file="../templates/main.tpl"}


{block name=content}

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
		{* wyświeltenie listy błędów, jeśli istnieją *}
		{if $msgs->isError()}
			<h4>Wystąpiły błędy: </h4>
			<ol class="err">
			{foreach $msgs->getErrors() as $err}
			{strip}
				<li>{$err}</li>
			{/strip}
			{/foreach}
			</ol>
		{/if}
		
		{* wyświeltenie listy informacji, jeśli istnieją *}
		{if $msgs->isInfo()}
			<h4>Informacje: </h4>
			<ol class="inf">
			{foreach $msgs->getInfos() as $inf}
			{strip}
				<li>{$inf}</li>
			{/strip}
			{/foreach}
			</ol>
		{/if}
		
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

	




