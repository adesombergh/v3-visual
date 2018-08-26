<div class="app-content">
	<div class="container is-fluid calendar-salaires">
		<div class="">
<?php foreach ($sections as $section): ?>
	<p class="heading has-text-white has-text-weight-bold"><?php echo $section['title'] ?></p>
	<div class="columns is-1 is-variable is-multiline is-mobile">
		<?php foreach ($section['liste'] as $qui): ?>
		<div class="column is-1-fullhd is-2-desktop is-2-tablet is-3-mobile">
			<?php if ($section['title']=='Cuisine'): ?>
			<a class="button is-small is-fullwidth is-link" href="modal-details-presta
			.php">
			<?php else: ?>
			<a class="button is-small is-fullwidth is-link" href="modal-details.php">
			<?php endif ?>
				<?php echo $qui ?>
			</a>
		</div>
		<?php endforeach ?>
	</div>
<?php endforeach ?>
		</div>
	</div>
</div>
