<?php
include_once 'modal.php';
include_once 'fake-content.php';
modal('app-content-generated.php',function(){
	global $salaire;
	?>
	<div class="box modal-box salaire-box">
		<p class="modal-title">Anna - Décembre 2017</p>
		<div class="tile is-ancestor">
			<div class="tile is-parent">
				<div class="tile is-child box">
					<table class="table is-narrow is-fullwidth is-hoverable">
						<thead>
							<tr class="is-selected">
								<th>Service</th>
								<th>H</th>
								<th>BH</th>
								<th>TH</th>
								<th class="has-text-right">T</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach ($salaire as $row): ?>
							<tr>
								<td><?php echo $row['service'] ?></td>
								<td><?php echo $row['h'] ?></td>
								<td><?php echo isset($row['bh'])?$row['bh']:'' ?></td>
								<td><?php echo $row['th'] ?></td>
								<td class="has-text-right">
									<?php 
									echo (
										($row['h']+(isset($row['bh'])?$row['bh']:0))
										* $row['th']
										- (isset($row['av'])?$row['av']:0)
									);
									 ?> €
								</td>
							</tr>
						<?php endforeach ?>
						</tbody>
						<tfoot>
							<tr>
								<th></th>
								<th>
								<?php 
								$h = 0;
								foreach ($salaire as $k=>$row) {
									$h += $row['h'];
								}
								echo $h;
								?>
								</th>
								<th>
								<?php 
								$bh = 0;
								foreach ($salaire as $k=>$row) {
										$bh += isset($row['bh'])?$row['bh']:0;
								}
								echo $bh;
								?>
								</th>
								<th></th>
								<th class="has-text-right">
									<?php echo ($h+$bh)*12 ?> €
								</th>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
			<div class="tile is-parent is-vertical">
				<div class="tile is-child box">
					<table class="table is-narrow is-fullwidth is-hoverable">
						<thead>
							<tr class="is-selected">
								<th colspan="2">Avances</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>06/01/2018 jour</td>
								<td class="has-text-right">20 €</td>
							</tr>
							<tr>
								<td>28/01/2018 jour</td>
								<td class="has-text-right">30 €</td>
							</tr>

						</tbody>
						<tfoot>
							<tr>
								<th>Total</th>
								<th class="has-text-right">50 €</th>
							</tr>
						</tfoot>
					</table>
				</div>
				<div class="tile is-child box">
					<div class="field is-horizontal">
						<div class="field-body">
							<div class="field is-expanded">
								<div class="field has-addons">
									<p class="control">
										<a class="button is-static is-small">
											<i class="fa fa-bank"></i>
										</a>
									</p>
									<p class="control is-expanded">
										<input value="1030" class="input is-small" type="tel" placeholder="Banque">
									</p>
								</div>
							</div>
							<div class="field is-expanded">
								<div class="field has-addons">
									<p class="control">
										<a class="button is-static is-small">
											<i class="fa fa-cutlery"></i>
										</a>
									</p>
									<p class="control is-expanded">
										<input value="120" class="input is-small" type="tel" placeholder="Chèques-Repas">
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tile is-child box">
					<table class="table is-narrow is-fullwidth is-hoverable">
						<thead>
							<tr class="is-selected">
								<th colspan="2">Total</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<span class="icon"><i class="fa fa-plus"></i></span>
								 	Salaire
								</td>
								<td class="has-text-right"><?php echo ($h+$bh)*12 ?> €</td>
							</tr>
							<tr>
								<td>
									<span class="icon"><i class="fa fa-minus"></i></span>
								 	Avances
								</td>
								<td class="has-text-right">50 €</td>
							</tr>
							<tr>
								<td>
									<span class="icon"><i class="fa fa-minus"></i></span>
								 	Banque
								</td>
								<td class="has-text-right">1030 €</td>
							</tr>
							<tr>
								<td>
									<span class="icon"><i class="fa fa-minus"></i></span>
								 	Chèques-Repas
								</td>
								<td class="has-text-right">120 €</td>
							</tr>
						</tbody>
						<tfoot>
							<tr class="">
								<th>
									<span class="icon"><i class="fa fa-money"></i></span>
								 	Cash
								</th>
								<th class="has-text-right"><?php echo ($h+$bh)*12-1150 ?> €</th>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>
	<?php
});
?>