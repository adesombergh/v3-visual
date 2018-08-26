	<?php include_once 'modal.php'; ?>
	<?php modal(function(){ 
$sorties = array(
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
<div class="box modal-box">
	<p class="modal-title">
		Sorties
	</p>
	<div class="box">
		<div class="level">
			<div class="level-item">
				<div class="tags has-addons">
					<span class="tag is-dark">
						<span class="icon"><i class="fa fa-external-link"></i></span>
						<span class="is-hidden-touch">Sorties Normales</span>
					</span>
					<span class="tag is-info">1.609,09 €</span>
				</div>
			</div>
			<div class="level-item">
				<div class="tags has-addons">
					<span class="tag is-dark">
						<span class="icon"><i class="fa fa-file-text-o"></i></span>
						<span class="is-hidden-touch">Factures Cash</span>
					</span>
					<span class="tag is-info">0 €</span>
				</div>
			</div>
		</div>
		<div class="field is-horizontal">
			<p class="control">
				<p class="select is-small">
					<select name="country">
						<option value="Type">Type</option>
						<option value="Courses">Courses</option>
						<option value="Avances">Avances</option>
						<option value="DJ">DJ</option>
						<option value="Autres">Autres</option>
					</select>
				</p>
			</p>
			<p class="control">
				<input class="input is-small" type="text" placeholder="Filtrer">
			</p>
			<p class="control">
				<label class="is-narrow">
					<input type="checkbox">
					Facture
				</label>
			</p>
		</div>

		<div style="max-height: 200px; overflow: scroll;">
			<table class="table is-bordered is-striped is-narrow is-fullwidth">
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
					<?php $total = 0; ?>
					<?php foreach ($sorties as $sortie): ?>
					<tr>
						<td><?php echo $sortie["type"] ?></td>
						<td><?php echo $sortie["quoi"] ?></td>
						<td><?php echo $sortie["quand"] ?></td>
						<td><?php echo $sortie["facture"] ?></td>
						<td><?php echo $sortie["combien"] ?></td>
					</tr>
					<?php $total += $sortie["combien"]; ?>
					<?php endforeach ?>
				</tbody>
				<tfoot>
					<tr class="is-selected">
						<th colspan="4">Total</th>
						<th><?php echo $total ?></th>
					</tr>
				</tfoot>
			</table>
		</div>

	</div>
</div>
	<? }); ?>