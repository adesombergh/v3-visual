<?php 
include_once '../services/modal.php';

modal(function(){
	?>
		<div class="box modal-box service-box">
			<p class="modal-title">Réglages</p>
			<div class="steps is-small">
				<div class="step-item is-completed is-link">
					<a class="step-marker" href="#">
						<span class="icon"></span>
					</a>
					<div class="step-details">
						<p class="heading has-text-weight-bold">Général</p>
					</div>
				</div>
				<div class="step-item is-active is-link">
					<a class="step-marker" href="#">
						<span class="icon"></span>
					</a>
					<div class="step-details">
						<p class="heading">Salaires</p>
					</div>
				</div>
				<div class="step-item is-active is-link">
					<a class="step-marker" href="#">
						<span class="icon"></span>
					</a>
					<div class="step-details">
						<p class="heading">Compta</p>
					</div>
				</div>
				<div class="step-item is-active is-link">
					<a class="step-marker" href="#">
						<span class="icon"></span>
					</a>
					<div class="step-details">
						<p class="heading">Bonus</p>
					</div>
				</div>
				<div class="step-item is-active is-link">
					<a class="step-marker" href="#">
						<span class="icon"></span>
					</a>
					<div class="step-details">
						<p class="heading">Bonus</p>
					</div>
				</div>
			</div>
			<div class="box">
				<div class="field">
					<label class="label">Délai pour faire les caisses</label>
					<p class="help">Combien de temps les respos disposent-t-ils avant que le service ne leur soit plus accessible, en minutes.</p>
					<div class="control">
						<input class="input is-small" type="number" placeholder="Text input">
					</div>
				</div>
				<div class="field">
					<label class="label">Taille minimum et maximum de l'équipe</label>
					<p class="help">Combien personnes il y a t'il dans une équipe au minimum et au maxium?</p>
					<div class="field is-horizontal">
						<div class="field-body">
							<div class="field">
								<p class="control">
									<input class="input is-small" type="number" placeholder="Text input">
								</p>
							</div>
							<div class="field">
								<p class="control">
									<input class="input is-small" type="number" placeholder="Text input">
								</p>
							</div>
						</div>

					</div>
				</div>
				<div class="field">
					<label class="label">Délai pour faire les caisses</label>
					<p class="help">Combien de temps les respos disposent-t-ils avant que le service ne leur soit plus accessible, en minutes.</p>
					<div class="control">
						<input class="input is-small" type="tags" placeholder="Add Tag" value="Tag1,Tag2,Tag3">
					</div>
				</div>
			</div>
		</div>
	<?php
});


 ?>

