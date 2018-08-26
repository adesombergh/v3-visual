<?php 
function steps($current){
	$steps = array(
		"fdc" => array(
			"step" => 1,
			"name" => "Fond&nbsp;de&nbsp;Caisse",
			"icon" => "fa-calculator"
		),
		"cash" => array(
			"step" => 2,
			"name" => "Cash",
			"icon" => "fa-money"
		),
		"plastique" => array(
			"step" => 3,
			"name" => "Plastique",
			"icon" => "fa-credit-card"
		),
		"sorties" => array(
			"step" => 4,
			"name" => "Sorties",
			"icon" => "fa-external-link"
		),
		"afacturer" => array(
			"step" => 5,
			"name" => "A&nbsp;Facturer",
			"icon" => "fa-file-text-o"
		),
		"tickets" => array(
			"step" => 6,
			"name" => "Tickets",
			"icon" => "fa-ticket"
		),
	);
	?>


<div class="steps">
	<?php foreach ($steps as $id => $step): ?>
		<?php
		$classes =  " is-info is-completed";
		if ($step['step'] == $steps[$current]['step']){
			$classes = " is-info is-active";
		}

		 ?>
	<div class="step-item<?php echo $classes; ?>">
		<a class="step-marker" href="modal-caisse-<?php echo $id ?>.php">
			<span class="icon"><i class="fa <?php echo $step['icon'] ?>"></i></span>
		</a>
		<div class="step-details">
			<p class="heading<?php echo $step['step'] == $steps[$current]['step']?' has-text-weight-bold':' is-hidden-touch'; ?>"><?php echo $step['name'] ?></p>
		</div>
	</div>
	<?php endforeach ?>
</div>
	<?php
}
 ?>