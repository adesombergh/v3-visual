	<?php
function modal($modal=null){

	include_once 'fake_content.php';
	include_once '../common/header.php';

	include_once 'app-header.php';
	include_once 'app-content.php';
	include_once 'app-footer.php';

 	if ($modal){
 	 ?>
	<div class="modal is-active">
		<div class="modal-background"></div>
		<div class="modal-content">
			<div class="close-box">
				<a class="delete is-medium" href="../compta/index.php"></a>
			</div>
			<?php $modal(); ?>
		</div>
	</div>
	<?php

	};
	include_once '../common/footer.php';
}