<p class="heading has-text-centered has-text-weight-bold">Bonus</p>
<div class="columns">
	<div class="column is-narrow">
		<div class="">
			<p class="panel-heading" style="background-color: #00d1b2;color: #fff;">
				Gestion des bonus
			</p>
			<div class="panel-block">
				<table class="table is-narrow">
					<thead>
						<tr>
							<th>Coupure</th>
							<th>Disponibles</th>
							<th>A prendre</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th id="coupure5">5 €</th>
							<td id="nombre5">20</td>
							<input type="hidden" id="reste5" name="reste5" value="20">
							<td><input type="number" id="aprendre5" data-coupure="5" class="input is-small" min="0" max="20"></td>
						</tr>
						<tr>
							<th id="coupure10">10 €</th>
							<td id="nombre10">20</td>
							<input type="hidden" id="reste10" name="reste10" value="20">
							<td><input type="number" id="aprendre10" data-coupure="10" class="input is-small" min="0" max="20"></td>
						</tr>
						<tr>
							<th id="coupure20">20 €</th>
							<td id="nombre20">20</td>
							<input type="hidden" id="reste20" name="reste20" value="20">
							<td><input type="number" id="aprendre20" data-coupure="20" class="input is-small" min="0" max="20"></td>
						</tr>
						<tr>
							<th id="coupure50">50 €</th>
							<td id="nombre50">20</td>
							<input type="hidden" id="reste50" name="reste50" value="20">
							<td><input type="number" id="aprendre50" data-coupure="50" class="input is-small" min="0" max="20"></td>
						</tr>
					</tbody>
				</table>
			</div>
			<p class="panel-heading" style="background-color: #00d1b2;color: #fff;">
				Total : 40 €
			</p>
		</div>
	</div>
	<div class="column">
		<div class="content">
			<p><strong>Bravo!</strong> Voici la répartition des bonus:</p>
			<p>Charlotte : 20 €</p>
			<p>Clement : 20 €</p>
			<p>Vous pouvez retirer 40 € (ou l'arrondi au billet de 5€ près) parmi les billets disponibles:</p>
		</div>
	</div>
</div>


