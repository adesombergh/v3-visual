<?php

function modal($modal=null){
	include_once 'fake_content.php'; ?>
	<?php include_once '../common/header.php'; ?>
	<div class="app-fixed-header">
		<?php include_once 'calendar-header.php'; ?>
	</div>
	<div class="app-content">
		<?php include 'calendar.php'; ?>
	</div>

	<?php if ($modal): ?>
	<div class="modal is-active">
		<div class="modal-background"></div>
		<div class="modal-content">
			<div class="close-box">
				<a class="delete is-medium" href="../services/index.php"></a>
			</div>
			<?php $modal(); ?>
		</div>
	</div>
	<?php endif ?>
	<?php include_once '../common/footer.php';
}

?>