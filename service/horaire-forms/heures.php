<?php include_once 'vars.php'; ?>
<?php foreach ($sections as $section): ?>
	
	<?php if (empty($section['chosen'])) continue; ?>
		<p class="heading has-text-weight-bold"><?php echo $section['title'] ?></p>
	<?php foreach ($section['chosen'] as $qui => $v): ?>			
		<div class="columns is-1 is-variable is-multiline is-mobile">
			<div class="column is-4-mobile is-2-tablet">

				<div class="dropdown is-hoverable" style="width: 100%;">
					<div class="dropdown-trigger" style="width: 100%;">
						<button class="button is-info is-outlined is-fullwidth is-small" aria-haspopup="true" aria-controls="dropdown-menu4">
							<span><?php echo $qui ?></span>
						</button>
					</div>
					<div class="dropdown-menu" id="dropdown-menu4" role="menu">
						<div class="dropdown-content">
							<div class="dropdown-item">
								<div class="level is-mobile">
									<div class="level-left heading">
										<strong>Quand</strong>
									</div>
									<div class="level-right heading">
										17/12 12h43
									</div>
								</div>
								<div class="level is-mobile">
									<div class="level-left heading">
										<strong>Qui</strong>
									</div>
									<div class="level-right heading">
										Robert
									</div>
								</div>
								<div class="level is-mobile">
									<div class="level-left">
										<button class="button is-danger"><i class="fa fa-trash"></i></button>
									</div>
									<div class="level-right"></div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="column is-4-mobile is-5-tablet">
				<p class="control is-expanded has-icon">
					<input type="text" class="input is-small" placeholder="Début">
					<span class="icon is-left">
						<i class="fa fa-hourglass-start"></i>
					</span>
				</p>
			</div>
			<div class="column is-4-mobile is-5-tablet">
				<p class="control is-expanded has-icon">
					<input type="text" class="input is-small" placeholder="Fin">
					<span class="icon is-left">
						<i class="fa fa-hourglass-end"></i>
					</span>
				</p>
			</div>

		</div>

	<?php endforeach ?>
<?php endforeach ?>