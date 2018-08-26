	<?php include_once 'modal.php'; ?>
	<?php modal(function(){ ?>
<div class="box modal-box compta-box">
	<p class="modal-title">
		Lundi 28 Janvier 2018
	</p>
	<div class="tile is-ancestor">
		<?php 
		$details = array("Jour - Anna", "Soir - Ambroise", "Total");
		foreach ($details as $title): ?>
		<div class="tile is-parent">
			<div class="tile is-child box">
				<p class="heading has-text-centered has-text-weight-bold"><?php echo $title ?></p>
				<p class="caisse-item">
					Cash
					<span>32<span class="is-hidden-tablet-only">&nbsp;€</span></span>
				</p>
				<p class="caisse-item">
					Sorties
					<span>730<span class="is-hidden-tablet-only">&nbsp;€</span></span>
				</p>
				<p class="caisse-item">
					Fact. Cash
					<span>655.70<span class="is-hidden-tablet-only">&nbsp;€</span></span>
				</p>
				<p class="caisse-item">
					Plastique
					<span>118.32<span class="is-hidden-tablet-only">&nbsp;€</span></span>
				</p>
				<p class="caisse-item">
					A Facturer
					<span>118.32<span class="is-hidden-tablet-only">&nbsp;€</span></span>
				</p>
				<p class="caisse-item has-text-weight-bold">
					Total
					<span>2.341<span class="is-hidden-tablet-only">&nbsp;€</span></span>
				</p>
				<p class="caisse-item">
					Pointé

					<span>118.32&nbsp;€ | 23%</span>
				</p>
			</div>
		</div>
		 <?php endforeach ?>
	</div>
	<div class="tile is-ancestor">
		<div class="tile is-parent">
			<div class="tile is-child box">
				<div class="field is-grouped is-grouped-multiline">
					<div class="control">
						<div class="tags has-addons">
							<span class="tag is-light">
								<span class="icon"><i class="fa fa-bank"></i></span>
								<span class="is-hidden-touch">BANQUE</span>
							</span>
							<span class="tag is-link">6.590,10 €</span>
						</div>
					</div>
					<div class="control">
						<div class="tags has-addons">
							<span class="tag is-light">
								<span class="icon"><i class="fa fa-volume-up"></i></span>
								<span class="is-hidden-touch">DECLARE</span>
							</span>
							<span class="tag is-link">17.730,40 € / 62%</span>
						</div>
					</div>
					<div class="control">
						<div class="tags has-addons">
							<span class="tag is-light">
								<span class="icon"><i class="fa fa-money"></i></span>
								<span class="is-hidden-touch">SOLDE</span>
							</span>
							<span class="tag is-link">9.650,9 €</span>
						</div>
					</div>
				</div>
				Banque
				<div class="bd-example" style="position: relative;">
					<input id="sliderWithValueTooltip" class="slider has-output-tooltip is-fullwidth is-link is-circle" min="0" max="100" value="50" step="5" type="range">
					<output for="sliderWithValueTooltip"></output>
				</div>
			</div>
		</div>
	</div>


</div>
	<?php }); ?>