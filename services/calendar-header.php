<?php include_once 'title-button.php'; ?>
<div class="calendar-services">
	<div class="calendar-nav">
		<div class="calendar-nav-left">
			<button class="button is-text">
				<i class="fa fa-chevron-left"></i>
			</button>
		</div>
		<div>Décembre 2017</div>
		<div class="calendar-nav-right">
			<button class="button is-text">
				<i class="fa fa-chevron-right"></i>
			</button>
		</div>
	</div>
	<div class="calendar-top">
		<div class="top-corner">&nbsp;</div>
		<?php foreach ($dates as $date): ?>
		<div class="day-top">
			<span class="is-header"><?php echo $date['date'] ?></span>
		</div>
		<?php endforeach ?>
		<div class="service-top">
			<span class="is-header">JOUR</span>
		</div>
		<div class="service-top">
			<span class="is-header">SOIR</span>
		</div>

	</div>
</div>
