<?php include_once 'vars.php'; ?>

<?php foreach ($sections as $section): ?>
	
	<?php if (empty($section['chosen'])) continue; ?>
		<p class="heading"><?php echo $section['title'] ?></p>

	<?php foreach ($section['chosen'] as $qui => $v): ?>
		<div class="columns is-1 is-variable is-multiline is-mobile">
		<?php if ($v=="th"): ?>
			<div class="column is-6-mobile is-3">
				<div class="dropdown is-hoverable" style="width: 100%;">
					<div class="dropdown-trigger" style="width: 100%;">
						<button class="button is-info is-outlined is-small is-fullwidth" aria-haspopup="true" aria-controls="dropdown-menu4">
							<span><?php echo $qui ?></span>
						</button>
					</div>
					<div class="dropdown-menu" id="dropdown-menu4" role="menu">
						<div class="dropdown-content">
							<a href="#" class="dropdown-item is-active">
								Par Heure
							</a>
							<a href="#" class="dropdown-item">
								Par Prestation
							</a>
							<hr class="dropdown-divider">
							<div class="dropdown-item">
								<div class="level is-mobile">
									<div class="level-left">
										<strong>Quand</strong>
									</div>
									<div class="level-right">
										17/12 12h43
									</div>
								</div>
								<div class="level is-mobile">
									<div class="level-left">
										<strong>Qui</strong>
									</div>
									<div class="level-right">
										Robert
									</div>
								</div>
								<div class="level is-mobile">
									<div class="level-left"></div>
									<div class="level-right">
										<button class="button is-danger"><i class="fa fa-trash"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="column is-6-mobile is-3">
				<p class="control is-expanded has-icon">
					<input type="text" class="input is-small" placeholder="Taux Horaire">
					<span class="icon is-left">
						<i class="fa fa-eur"></i>
					</span>
				</p>
			</div>
			<div class="column is-6-mobile is-3">
				<p class="control is-expanded has-icon">
					<input type="text" class="input is-small" placeholder="Début">
					<span class="icon is-left">
						<i class="fa fa-hourglass-start"></i>
					</span>
				</p>
			</div>
			<div class="column is-6-mobile is-3">
				<p class="control is-expanded has-icon">
					<input type="text" class="input is-small" placeholder="Fin">
					<span class="icon is-left">
						<i class="fa fa-hourglass-end"></i>
					</span>
				</p>
			</div>
		<?php else: ?>
			<div class="column is-6-mobile is-3">
				<div class="dropdown is-hoverable is-right" style="width: 100%;">
					<div class="dropdown-trigger" style="width: 100%;">
						<button class="button is-info is-outlined is-fullwidth is-small" aria-haspopup="true" aria-controls="dropdown-menu4">
							<span><?php echo $qui ?></span>
						</button>
					</div>
					<div class="dropdown-menu" id="dropdown-menu4" role="menu">
						<div class="dropdown-content">
							<a href="#" class="dropdown-item">
								Par Heure
							</a>
							<a href="#" class="dropdown-item is-active">
								Par Prestation
							</a>
							<hr class="dropdown-divider">
							<div class="dropdown-item">
								<div class="level is-mobile">
									<div class="level-left">
										<strong>Quand</strong>
									</div>
									<div class="level-right">
										17/12 12h43
									</div>
								</div>
								<div class="level is-mobile">
									<div class="level-left">
										<strong>Qui</strong>
									</div>
									<div class="level-right">
										Robert
									</div>
								</div>
								<div class="level is-mobile">
									<div class="level-left"></div>
									<div class="level-right">
										<button class="button is-danger"><i class="fa fa-trash"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="column is-6-mobile is-9">
				<div class="field">
					<p class="control is-expanded has-icon">
						<input type="text" class="input is-small" placeholder="Prestation">
						<span class="icon">
							<i class="fa fa-eur"></i>
						</span>
					</p>
				</div>
			</div>
		<?php endif ?>
		</div>
	<?php endforeach ?>
<?php endforeach ?>
