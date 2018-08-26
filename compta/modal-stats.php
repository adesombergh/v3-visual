	<?php include_once 'modal.php'; ?>
	<?php modal(function(){ ?>
<div class="box modal-box stats-box">
	<p class="modal-title">
		Stats de la semaine
	</p>
	<div class="columns is-multiline">
		<div class="column is-4">
			<p class="heading has-text-weight-bold has-text-centered">cash</p>
			<div class="box">
				<table class="table is-narrow is-hoverable is-fullwidth">
					<tbody>
						<tr>
							<td>Banque</td>
							<td class="has-text-right">0 €</td>
						</tr>
						<tr>
							<td>Solde Cash</td>
							<td class="has-text-right">15.980,00 €</td>
						</tr>
						<tr class="is-selected has-text-weight-bold">
							<td>Total Cash</td>
							<td class="has-text-right">15.980,00 €</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="column is-4">
			<p class="heading has-text-weight-bold has-text-centered">Déclaration</p>
			<div class="box">
				<table class="table is-narrow is-hoverable is-fullwidth">
					<tbody>
						<tr>
							<td>Déclaré</td>
							<td class="has-text-right">11.406,2 €</td>
							<td class="has-text-right">39.3%</td>
						</tr>
						<tr>
							<td>Pas Déclaré</td>
							<td class="has-text-right">17.589,09 €</td>
							<td class="has-text-right">60.7%</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="column is-4">
			<p class="heading has-text-weight-bold has-text-centered">Pointage</p>
			<div class="box">
				<table class="table is-narrow is-hoverable is-fullwidth">
					<tbody>
						<tr>
							<td>Total Pointé</td>
							<td class="has-text-right">0 €</td>
							<td class="has-text-right">0 %</td>
						</tr>
						<tr>
							<td>Total Surplus</td>
							<td class="has-text-right">28.995,29 €</td>
							<td class="has-text-right">100 %</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="column is-4">
			<p class="heading has-text-weight-bold has-text-centered">Grand Total</p>
			<div class="box">
				<table class="table is-narrow is-hoverable is-fullwidth">
					<tbody>
						<tr>
							<td>Total Cash</td>
							<td class="has-text-right">15.980,00 €</td>
						</tr>
						<tr>
							<td>Argent Plastique</td>
							<td colspan="2" class="has-text-right">11.406,2 €</td>
						</tr>
						<tr>
							<td>Sorties Normales</td>
							<td colspan="2" class="has-text-right">1.609,09 €</td>
						</tr>
						<tr>
							<td>Sorties avec Factures</td>
							<td colspan="2" class="has-text-right">0 €</td>
						</tr>
						<tr>
							<td>A Facturer</td>
							<td colspan="2" class="has-text-right">0 €</td>
						</tr>
						<tr class="has-text-weight-bold is-selected">
							<td>Grand Total</td>
							<td class="has-text-right">28.995,29 €</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="column is-4">
			<p class="heading has-text-weight-bold has-text-centered">Semaine / Weekend</p>
			<div class="box">
				<table class="table is-narrow is-hoverable is-fullwidth">
					<tbody>
						<tr class="has-text-weight-bold is-selected">
							<td></td>
							<td class="has-text-centered">Lun <-> Jeu</td>
							<td class="has-text-centered">Vend <-> Dim</td>
						</tr>
						<tr>
							<td>Total</td>
							<td class="has-text-centered">8.308,2 €</td>
							<td class="has-text-centered">20.710,19 €</td>
						</tr>
						<tr>
							<td>Moyenne</td>
							<td class="has-text-centered">2.077,1 €</td>
							<td class="has-text-centered">6.903,4 €</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="column is-4">
			<p class="heading has-text-weight-bold has-text-centered">Moyennes</p>
			<div class="box">
				<table class="table is-narrow is-hoverable is-fullwidth">
					<tbody>
						<tr class="has-text-weight-bold is-selected">
							<td>Moyenne par jour</td>
							<td class="has-text-right">4.142,2 €</td>
						</tr>
						<tr>
							<td>Moyenne en journée</td>
							<td class="has-text-right">1.213,4 €</td>
						</tr>
						<tr>
							<td>Moyenne en soirée</td>
							<td class="has-text-right">2.932,1 €</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
	<?php }); ?>