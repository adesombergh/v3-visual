<div class="columns is-mobile">
	<div class="column">
		<p class="heading">Rouleaux</p>
		<?php $rouleaux = array(".1",".2",".5","1","2") ?>
		<?php foreach ($rouleaux as $rouleau): ?>
		<div class="field has-addons">
			<p class="control">
				<a class="button is-static is-small">
					<?php echo $rouleau ?> €
				</a>
			</p>
			<p class="control is-expanded">
				<input class="input is-small" value="0" type="tel" placeholder="<?php echo $rouleau ?> €">
			</p>
			<p class="control">
				<a class="button is-static is-small">
					0 €
				</a>
			</p>
		</div>
		<?php endforeach ?>
	</div>
	<div class="column">
		<p class="heading">Billets</p>
		<?php $billets = array("5","10","20","50","100") ?>
		<?php foreach ($billets as $billet): ?>
		<div class="field has-addons">
			<p class="control">
				<a class="button is-static is-small">
					<?php echo $billet ?> €
				</a>
			</p>
			<p class="control is-expanded">
				<input class="input is-small" value="0" type="tel" placeholder="<?php echo $billet ?> €">
			</p>
			<p class="control">
				<a class="button is-static is-small">
					0 €
				</a>
			</p>
		</div>
		<?php endforeach ?>
	</div>
</div>
<div class="columns is-mobile">
	<div class="column">
		<p class="heading">Vrac</p>
		<p class="control">
			<input class="input is-small" value="0" type="tel" placeholder="Vrac">
		</p>

	</div>
	<div class="column">
		<p class="heading">Dépenses</p>
		<p class="control">
			<input class="input is-small" value="0" type="tel" placeholder="Dépenses">
		</p>
	</div>
</div>
<div class="columns is-mobile">
	<div class="column">
		<p class="heading has-text-weight-bold">Total</p>
		<p class="label has-text-right">0 €</p>
	</div>
	<div class="column">
		<p class="heading has-text-weight-bold">Différence</p>
		<p class="label has-text-right">0 €</p>
	</div>
</div>

