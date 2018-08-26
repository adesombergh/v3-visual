<?php 
include_once '../services/modal.php';

modal(function(){
	?>
		<div class="box modal-box service-box">
			<p class="modal-title">
				Suppression
			</p>

			<div class="tile is-ancestor">
				<div class="tile is-parent">
					<div class="tile is-child">	
						<p class="heading has-text-centered has-text-weight-bold">Suppression Automatique</p>
						<div class="box">
							<p class="help">Quel est le temps de vie d'un service (en jours)? 0 ou rien pour désactiver.</p>
							<div class="field">
								<div class="control has-icon">
									<input class="input" type="text" placeholder="Laisser vide pour désactiver">
									<span class="icon is-small is-left">
										<i class="fa fa-calendar-times-o"></i>
									</span>
								</div>
							</div>
							<div class="field">
								<button class="button is-danger is-fullwidth">Enregistrer</button>
							</div>

						</div>
					</div>
				</div>
				<div class="tile is-parent">
					<div class="tile is-child">
						<p class="heading has-text-centered has-text-weight-bold">Supprimer des Données</p>
						<div class="box">
							<div class="field has-addons">
								<div class="control has-icon is-expanded">
									<input class="input" type="text" placeholder="Début">
									<span class="icon is-small is-left">
										<i class="fa fa-calendar-times-o"></i>
									</span>
								</div>
								<div class="control has-icon is-expanded">
									<input class="input" type="text" placeholder="Fin">
									<span class="icon is-small is-left">
										<i class="fa fa-calendar-times-o"></i>
									</span>
								</div>
							</div>
							<div class="field has-text-centered">
								<input class="is-checkradio is-danger" id="exampleRadioInline1" type="radio" name="exampleRadioInline" checked="checked">
								<label for="exampleRadioInline1">Jour</label>
								<input class="is-checkradio is-danger" id="exampleRadioInline2" type="radio" name="exampleRadioInline">
								<label for="exampleRadioInline2">Soir</label>
							</div>
							<div class="field">
								<button class="button is-danger is-fullwidth">Effacer</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="notification is-warning has-text-centered">
				<span class="icon"><i class="fa fa-exclamation-triangle"></i></span>
				<span>Attention, la suppression des données est immédiate et irréversible. Veuillez réfléchir deux fois avant d'effacer quoi que ce soit.</span>
			</div>

		</div>
	<?php
});


 ?>

