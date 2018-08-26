<?php 
$sections = array(
	array(
		'title' => 'Bar',
		'liste' => array("Adrien", "Ambroise", "Andy", "Anna", "Beunoit", "Charlene", "Chloe", "Claire", "Clement", "Djamila", "Egon", "Elyes", "Erika", "Guillaume", "Jaume", "Mathieu", "Noe", "Pauline", "Sarah", "Toutoune"),
		'chosen' => array("Anna"=>"1",  "Clement"=>"1", "Djamila"=>"1", "Sarah"=>"1", "Toutoune"=>"1"),
	),
	array(
		'title' => 'Cuisine',
		'liste' => array("Beunoit", "Giovanni", "Jaume", "JB", "Jero", "Mehdi", "Timothee"),
		'chosen' => array("Timothee"=>"1"),
	),
	array(
		'title' => 'Sécu',
		'liste' => array("Christian", "Fouad", "Soheil"),
		'chosen' => array(),
	),

)
 ?>
<?php foreach ($sections as $section): ?>
	<p class="heading"><?php echo $section['title'] ?></p>
	<div class="columns is-1 is-variable is-multiline is-mobile">
		<?php foreach ($section['liste'] as $qui): ?>
			<?php if (isset($section['chosen'][$qui])): ?>
				<div class="column is-1-fullhd is-2-desktop is-2-tablet is-3-mobile">
					<button class="button is-small is-fullwidth is-info">
						<?php echo $qui ?>
					</button>
				</div>
			<?php else: ?>
				<div class="column is-1-fullhd is-2-desktop is-2-tablet is-3-mobile">
					<button class="button is-small is-fullwidth">
						<?php echo $qui ?>
					</button>
				</div>
			<?php endif ?>
		<?php endforeach ?>
	</div>
<?php endforeach ?>
