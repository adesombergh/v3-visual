<?php 
include_once '../services/modal.php';
modal(function(){
?>
		<div class="box modal-box service-box">
			<p class="modal-title">
				Jeu, 21 Oct 2017 - Soir - Anna
			</p>
			<?php include_once 'modal-contents.php'; ?>
			<?php content('horaires') ?>
		</div>
<?php }) ?>
