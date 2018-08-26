<?php 
function modal($content,$modal=null){
 include_once 'fake-content.php';
 include_once '../common/header.php';
 include_once 'app-header.php';
 include_once $content;
 if ($modal) {
 ?>
 <div class="modal is-active">
 	<div class="modal-background"></div>
 	<div class="modal-content">
 		<div class="close-box">
 			<a href="../salaires/generated.php" class="delete is-medium"></a>
 		</div>
 		<?php $modal(); ?>
 	</div>
 </div>
 <?php
 }
 include_once '../common/footer.php';
}
