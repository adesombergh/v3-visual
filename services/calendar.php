<div class="calendar-services">
	<div class="calendar-body">

		<div class="service-left row-jour">
			<span class="is-header is-turned">JOUR</span>
		</div>
		<div class="service-left row-soir">
			<span class="is-header is-turned">SOIR</span>
		</div>
		<?php foreach ($dates as $date): ?>
		<div class="day-left">
			<span class="is-header is-turned"><?php echo $date['date'] ?></span>
		</div>
		<?php if (isset($date['services'])): ?>
			
		<div class="calendar-item service row-jour">
			<a class="service-box box" href="../service/modal-fresh.php">
				<div class="service-info">
					<p class="service-element respo"><?php echo $date['services'][1]['respo'] ?></p>
					<p class="service-element"><i class="fa fa-calendar"></i> <?php echo $date['date'] ?></p>
					<p class="service-element"><i class="fa fa-money"></i> <?php echo $date['services'][1]['chiffre'] ?> €</p>
					<p class="service-element"><i class="fa fa-users"></i> <?php echo $date['services'][1]['equipe'] ?> personnes</p>
					<p class="service-element"><i class="fa fa-undo"></i> <?php echo $date['services'][1]['avances'] ?> avances</p>
					<p class="service-element"><i class="fa fa-hand-o-up"></i>
						<?php echo $date['services'][1]['pointe'] ?> € | <?php echo round($date['services'][1]['pointe']/$date['services'][1]['chiffre']*100); ?>%</p>
					<p class="service-element"><i class="fa fa-gift"></i> 2h</p>
				</div>
			</a>
		</div>
		<div class="calendar-item service row-soir">
			<a class="service-box box" href="../service/modal-fresh.php">
				<div class="service-info">
					<p class="service-element respo"><?php echo $date['services'][0]['respo'] ?></p>
					<p class="service-element"><i class="fa fa-calendar"></i> <?php echo $date['date'] ?></p>
					<p class="service-element"><i class="fa fa-money"></i> <?php echo $date['services'][0]['chiffre'] ?> €</p>
					<p class="service-element"><i class="fa fa-users"></i> <?php echo $date['services'][0]['equipe'] ?> personnes</p>
					<p class="service-element"><i class="fa fa-undo"></i> <?php echo $date['services'][0]['avances'] ?> avances</p>
					<p class="service-element"><i class="fa fa-hand-o-up"></i>
						<?php echo $date['services'][0]['pointe'] ?> € | <?php echo round($date['services'][0]['pointe']/$date['services'][0]['chiffre']*100); ?>%</p>
					<p class="service-element"><i class="fa fa-gift"></i> 2h</p>
				</div>
			</a>
		</div>
		<?php else: ?>
		<div class="calendar-item service row-jour">
			<a class="service-box button is-white is-outlined" href="../service/modal-fresh.php">
				<i class="fa fa-plus-circle fa-2x"></i>
			</a>
		</div>
		<div class="calendar-item service row-soir">
			<a class="service-box button is-white is-outlined" href="../service/modal-fresh.php">
				<i class="fa fa-plus-circle fa-2x"></i>
			</a>
		</div>
		<?php endif ?>
		<?php endforeach ?>
	</div><!-- CAL BODY -->
</div>