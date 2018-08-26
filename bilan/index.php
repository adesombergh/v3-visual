<?php $sorties = array(
	array(
		"type" => "Courses",
		"quoi"=>"",
		"quand" => "15/01/2018 jour",
		"facture" => 0,
		"combien" => 48.18
	),
	array(
		"type" => "Courses",
		"quoi"=>"",
		"quand" => "16/01/2018 jour",
		"facture" => 0,
		"combien" => 20.04
	),
	array(
		"type" => "Courses",
		"quoi"=>"",
		"quand" => "17/01/2018 jour",
		"facture" => 0,
		"combien" => 23.56
	),
	array(
		"type" => "Courses",
		"quoi"=>"",
		"quand" => "18/01/2018 jour",
		"facture" => 0,
		"combien" => 4.05
	),
	array(
		"type" => "Courses",
		"quoi"=>"",
		"quand" => "18/01/2018 jour",
		"facture" => 0,
		"combien" => 32.9
	),
	array(
		"type" => "Courses",
		"quoi"=>"",
		"quand" => "18/01/2018 jour",
		"facture" => 0,
		"combien" => 3.9
	),
	array(
		"type" => "Courses",
		"quoi"=>"",
		"quand" => "19/01/2018 jour",
		"facture" => 0,
		"combien" => 9.2
	),
	array(
		"type" => "Courses",
		"quoi"=>"",
		"quand" => "19/01/2018 jour",
		"facture" => 0,
		"combien" => 4.5
	),
	array(
		"type" => "Courses",
		"quoi"=>"",
		"quand" => "19/01/2018 jour",
		"facture" => 0,
		"combien" => 13.31
	),
	array(
		"type" => "Courses",
		"quoi"=>"",
		"quand" => "19/01/2018 soir",
		"facture" => 0,
		"combien" => 5.04
	),
	array(
		"type" => "Courses",
		"quoi"=>"",
		"quand" => "20/01/2018 jour",
		"facture" => 0,
		"combien" => 30.60
	),
	array(
		"type" => "Courses",
		"quoi"=>"",
		"quand" => "20/01/2018 jour",
		"facture" => 0,
		"combien" => 1.49
	),
	array(
		"type"=>"Avances",
		"quoi"=>"Christian",
		"quand"=> "17/01/2018 soir",
		"facture"=>0,
		"combien"=>64.50
	),
	array(
		"type"=>"Avances",
		"quoi"=>"Christian",
		"quand"=> "19/01/2018 soir",
		"facture"=>0,
		"combien"=>85
	),
	array(
		"type"=>"Avances",
		"quoi"=>"Christian",
		"quand"=> "20/01/2018 soir",
		"facture"=>0,
		"combien"=>85
	),
	array(
		"type"=>"Avances",
		"quoi"=>"Fouad",
		"quand"=> "15/01/2018 soir",
		"facture"=>0,
		"combien"=>67.5
	),
	array(
		"type"=>"Avances",
		"quoi"=>"Fouad",
		"quand"=> "18/01/2018 soir",
		"facture"=>0,
		"combien"=>81
	),
	array(
		"type"=>"Avances",
		"quoi"=>"Housni",
		"quand"=> "17/01/2018 jour",
		"facture"=>0,
		"combien"=>50
	),
	array(
		"type"=>"Avances",
		"quoi"=>"Jaume",
		"quand"=> "19/01/2018 soir",
		"facture"=>0,
		"combien"=>50
	),
	array(
		"type"=>"Avances",
		"quoi"=>"Soheil",
		"quand"=> "16/01/2018 soir",
		"facture"=>0,
		"combien"=>250
	),
	array(
		"type"=>"Avances",
		"quoi"=>"Soheil",
		"quand"=> "19/01/2018 soir",
		"facture"=>0,
		"combien"=>132
	),
	array(
		"type"=>"Autres",
		"quoi"=>"Saucissons",
		"quand"=> "18/01/2018 soir",
		"facture"=>0,
		"combien"=>121
	),
	array(
		"type"=>"Autres",
		"quoi"=>"Saucissons valery",
		"quand"=> "16/01/2018 jour",
		"facture"=>0,
		"combien"=>76.32
	),
	array(
		"type"=>"DJ",
		"quoi"=>"",
		"quand"=> "19/01/2018 soir",
		"facture"=>0,
		"combien"=>200
	),
	array(
		"type"=>"DJ",
		"quoi"=>"",
		"quand"=> "20/01/2018 soir",
		"facture"=>0,
		"combien"=>150
	)
);
		?>

<?php include_once '../common/header.php'; ?>
<div class="app-fixed-header">
	<div class="top-title is-mobile has-text-centered">
		<a class="has-text-white" href="">
			<span>Bilan</span>
		</a>
	</div>
	<div class="calendar-bilan">
		<div class="calendar-nav">
			<div class="calendar-nav-left">
				<button class="button is-text">
					<i class="fa fa-chevron-left"></i>
				</button>
			</div>
			<div>Janvier 2018</div>
			<div class="calendar-nav-right">
				<button class="button is-text">
					<i class="fa fa-chevron-right"></i>
				</button>
			</div>
		</div>
	</div>
</div>
<div class="app-content">
	<div class="container is-fluid calendar-bilan">
		<div class="columns">
			<div class="column">
					<p class="heading has-text-weight-bold has-text-white">Compta</p>
				<div class="box">
					<table class="table is-narrow is-fullwidth">
						<tbody>
							<tr class="is-selected">
								<th colspan="3">Chiffre</th>
								<th colspan="2" class="has-text-right">92.703,58 €</th>
							</tr>
							<tr>
								<td rowspan="4" style="vertical-align: middle;">Officiel</td>
								<td>A la banque</td>
								<td class="has-text-right">34.434,03 €</td>
								<td rowspan="4" class="has-text-right" style="vertical-align: middle;">70.870,15 €</td>
								<td rowspan="4" class="has-text-right" style="vertical-align: middle;">76,45%</td>
							</tr>
							<tr>
								<td>Cartes</td>
								<td class="has-text-right">35.093,52 €</td>
							</tr>
							<tr>
								<td>Factures Cash</td>
								<td class="has-text-right">1.342,60 €</td>
							</tr>
													<tr>
								<td>A Facturer</td>
								<td class="has-text-right">0,00 €</td>
							</tr>
							<tr>
								<td rowspan="2" style="vertical-align: middle;">Officieux</td>
								<td>Solde Cash</td>
								<td class="has-text-right">14.860,97 €</td>
								<td rowspan="2" class="has-text-right" style="vertical-align: middle;">21.833,43 €</td>
								<td rowspan="2" class="has-text-right" style="vertical-align: middle;">23,55%</td>
							</tr>
							<tr>
								<td style="border-bottom-width: 1px">Sorties normales</td>
								<td style="border-bottom-width: 1px" class="has-text-right">6.972,46 €</td>
							</tr>
						</tbody>
					</table>
				</div>
					<p class="heading has-text-weight-bold has-text-white">Salaires</p>
				<div class="box">
					<table class="table is-narrow is-fullwidth">
						<tbody>
							<tr class="is-selected">
								<th>Salaires</th>
								<th class="has-text-right">27.201,13 €</th>
							</tr>
																					
							<tr>
								<td>Avances</td>
								<td class="has-text-right">1.647,50 €</td>
							</tr>
																					
							<tr>
								<td>Banque</td>
								<td class="has-text-right">0 €</td>
							</tr>
																					
							<tr>
								<td>Salaires en Cash</td>
								<td class="has-text-right">25.553,63 €</td>
							</tr>
																					
							<tr>
								<td>Soldes négatifs</td>
								<td class="has-text-right">-83,75 €</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="column">
					<p class="heading has-text-weight-bold has-text-white">Sorties</p>
				<div class="box">
						<div style="height: 400px; overflow: scroll;">
							<table class="table is-narrow is-fullwidth">
								<thead>
									<tr class="is-selected">
										<th>Type</th>
										<th>Quoi</th>
										<th>Quand</th>
										<th>Facture</th>
										<th>Combien</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($sorties as $sortie): ?>
										<tr>
											<td><?php echo $sortie["type"] ?></td>
											<td><?php echo $sortie["quoi"] ?></td>
											<td><?php echo $sortie["quand"] ?></td>
											<td><?php echo $sortie["facture"] ?></td>
											<td class="has-text-right"><?php echo $sortie["combien"] ?> €</td>
										</tr>
									<?php endforeach ?>
								</tbody>
								<tfoot>
									<tr class="is-selected">
										<th colspan="4">Total</th>
										<th>1.241,03 €</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>
<?php include_once '../common/footer.php';