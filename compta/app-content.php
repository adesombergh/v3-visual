<div class="app-content" style="top: 132px;padding-bottom: 100px;">
	<div class="calendar-compta">
		<div class="calendar-days">
			<?php foreach ($dates as $date): ?>
			<div class="day">
				<div class="day-top">
					<span class="is-header"><?php echo $date['date'] ?></span>
				</div>
				<div class="day-content">
				<?php if (isset($date['services'])): ?>
					<div class="box day-box">
						<p class="navigator">
							<a class="left-arrow"><i class="fa fa-chevron-left"></i></a>
							<span>JOUR | <?php echo $date['services'][1]['respo'] ?></span>
							<a class="right-arrow"><i class="fa fa-chevron-right"></i></a>
						</p>
						<a class="service-content" href="modal-compta.php">
							<p class="service-element has-text-info"><i class="fa fa-money"></i> <?php echo $date['services'][1]['chiffre']-1000 ?> €</p>
							<p class="service-element has-text-info"><i class="fa fa-external-link"></i> <?php echo $date['services'][1]['avances']*23.4 ?> €</p>
							<p class="service-element has-text-danger"><i class="fa fa-file-sound-o"></i>0 €</p>
							<p class="service-element has-text-danger"><i class="fa fa-credit-card"></i>1.245,34 €</p>
							<p class="service-element has-text-danger"><i class="fa fa-envelope-o"></i>0 €</p>
							<p class="service-element"><i class="fa fa-hand-pointer-o"></i>235 € <span class="is-pulled-right">78%</span></p>
						</a>

					</div>
					<a class="box day-box" href="modal-compta.php">
						<p class="service-element box-header">
							Compta
						</p>
						<p class="service-element has-text-info"><i class="fa fa-money"></i> 2129.32 €</p>
						<p class="service-element has-text-danger"><i class="fa fa-bank"></i> 3027,23 €</p>
						<p class="service-element has-text-danger"><i class="fa fa-volume-up"></i>
							<?php echo $date['services'][0]['pointe'] ?> € <span class="is-pulled-right"><?php echo round($date['services'][0]['pointe']/$date['services'][0]['chiffre']*100); ?>%</span></p>
					</a>
					<a class="box day-box" href="modal-compta.php">
						<p class="service-element box-header"><?php echo $date['services'][0]['chiffre']+$date['services'][1]['chiffre'] ?> €</p>
					</a>
				<?php endif ?>
				</div>
			</div>
			<?php endforeach ?>
		</div>
	</div>

</div>