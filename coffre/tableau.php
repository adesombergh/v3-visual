<?php include_once 'vars.php'; ?>
<?php foreach ($coffres as $coffre): ?>
	<div class="columns is-mobile is-fullwidth">
		<div class="column"><?php echo $coffre[2] ?></div>
		<div class="column"><?php echo $coffre[0] ?></div>
		<div class="column is-hidden-touch"><?php echo $coffre[1] ?></div>
		<div class="column is-narrow">
			<a class="button is-small is-info" href="index2.php"><i class="fa fa-eye"></i></a>
		</div>
	</div>
<?php endforeach ?>
