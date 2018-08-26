<?php 
include_once '../services/modal.php';

modal(function(){
	?>
		<div class="box modal-box service-box">
			<p class="modal-title">Bonus</p>

<div class="steps is-small">
	<div class="step-item is-completed is-link">
		<a class="step-marker" href="#">
			<span class="icon"></span>
		</a>
		<div class="step-details">
			<p class="heading has-text-weight-bold">Jour Semaine</p>
		</div>
	</div>
	<div class="step-item is-active is-link">
		<a class="step-marker" href="#">
			<span class="icon"></span>
		</a>
		<div class="step-details">
			<p class="heading">Soir Semaine</p>
		</div>
	</div>
	<div class="step-item is-active is-link">
		<a class="step-marker" href="#">
			<span class="icon"></span>
		</a>
		<div class="step-details">
			<p class="heading">Brunch</p>
		</div>
	</div>
	<div class="step-item is-active is-link">
		<a class="step-marker" href="#">
			<span class="icon"></span>
		</a>
		<div class="step-details">
			<p class="heading">Soir Weekend</p>
		</div>
	</div>
</div>
			<div class="box">

				<div class="columns is-hidden-mobile">
					<div class="column is-narrow">
						<div class="field">
							<p class="control">
								<a class="button is-small is-white">#</a>
							</p>
						</div>
					</div>
					<div class="column">
						<div class="field">
							<p class="help">
								Seuil
							</p>
						</div>
					</div>
					<div class="column">
						<div class="field">
							<p class="help">
								Bonus Initial
							</p>
						</div>
					</div>
					<div class="column">
						<div class="field">
							<p class="help">
								Paliers suivants de
							</p>
						</div>
					</div>
					<div class="column">
						<div class="field">
							<p class="help">
								Supplément bonus
							</p>
						</div>
					</div>
				</div>
			<?php for ($i = 3; $i <= 6; $i++){
				?>
				<div class="columns">
					<div class="column is-narrow">
						<div class="field">
							<p class="control">
								<a class="button is-small is-info is-fullwidth"><?php echo $i ?></a>
							</p>
						</div>
					</div>
					<div class="column">
						<p class="help is-hidden-desktop is-hidden-tablet">Seuil</p>
						<div class="field has-addons">
							<p class="control is-expanded">
								<input class="input is-small" type="text" value="1980" placeholder="Seuil">
							</p>
							<p class="control">
								<a class="button is-static is-small">€</a>
							</p>
						</div>
					</div>
					<div class="column">
						<p class="help is-hidden-desktop is-hidden-tablet">Bonus Initial</p>
						<div class="field has-addons">
							<p class="control is-expanded">
								<input class="input is-small" type="text" value="2" placeholder="Bonus Initial">
							</p>
							<p class="control">
								<a class="button is-static is-small">h</a>
							</p>
						</div>
					</div>
					<div class="column">
						<p class="help is-hidden-desktop is-hidden-tablet">Paliers Suivants</p>
						<div class="field has-addons">
							<p class="control is-expanded">
								<input class="input is-small" type="text" value="200" placeholder="A chaque">
							</p>
							<p class="control">
								<a class="button is-static is-small">€</a>
							</p>
						</div>
					</div>
					<div class="column">
						<p class="help is-hidden-desktop is-hidden-tablet">Supplément Bonus</p>
						<div class="field has-addons">
							<p class="control is-expanded">
								<input class="input is-small" type="text" value="0.25" placeholder="Bonus">
							</p>
							<p class="control">
								<a class="button is-static is-small">h</a>
							</p>
						</div>
					</div>
				</div>
				<?php
			} ?>
			</div>
		</div>
	<?php
});


 ?>

