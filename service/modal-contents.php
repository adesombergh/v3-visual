<?php 
function content($which){
?>
<div class="tile is-ancestor" style="height: 340px;">
	<div class="tile is-parent is-3 is-vertical">
		<a class="tile is-child box button-box<?php echo $which=="caisse"?' is-selected':''; ?>" href="modal-caisse-fdc.php">
			<p class="heading has-text-centered has-text-weight-bold">Caisse</p>
			<p class="caisse-item">
				FDC
				<span>32<span class="is-hidden-tablet-only">&nbsp;€</span></span>
			</p>
			<p class="caisse-item">
				Cash
				<span>730<span class="is-hidden-tablet-only">&nbsp;€</span></span>
			</p>
			<p class="caisse-item">
				Plastique
				<span>655.70<span class="is-hidden-tablet-only">&nbsp;€</span></span>
			</p>
			<p class="caisse-item">
				Sorties
				<span>118.32<span class="is-hidden-tablet-only">&nbsp;€</span></span>
			</p>
			<p class="caisse-item">
				A Facturer
				<span>118.32<span class="is-hidden-tablet-only">&nbsp;€</span></span>
			</p>
			<p class="caisse-item">
				Tickets
				<span>321.11<span class="is-hidden-tablet-only">&nbsp;€</span></span>
			</p>
			<p class="caisse-item has-text-weight-bold">
				Total
				<span>2.341<span class="is-hidden-tablet-only">&nbsp;€</span></span>
			</p>
		</a>
		<a class="tile is-child box button-box<?php echo $which=="messages"?' is-selected':''; ?>" href="modal-messages.php">
			<p class="heading has-text-centered has-text-weight-bold">Messages</p>
			<div class="tags">
				<span class="tag is-light">Divers</span>
				<span class="tag is-light">Cuisine</span>
				<span class="tag is-light">Sécu</span>
			</div>
		</a>
	</div>
	<?php if ($which!="fresh"): ?>
	<div class="tile is-parent the-viewport">
		<div class="viewport-close">
			 <a href="modal-fresh.php" class="delete is-large"></a>
		</div>
		<div class="tile is-child box">
			<div class="scroller">
				<?php include_once "contents/$which.php"; ?>
			</div>
		</div>
	</div>
	<?php endif ?>
</div>
<div class="tile is-ancestor">
	<div class="tile is-parent is-3">
		<a href="modal-bonus.php" class="tile is-child box button-box<?php echo $which=="bonus"?' is-selected':''; ?>">
			<p class="heading has-text-centered has-text-weight-bold">Bonus</p>
			<div class="field is-grouped is-grouped-multiline">
				<div class="control">
					<div class="tags has-addons">
						<span class="tag is-light">Bonus</span>
						<span class="tag is-success">10€</span>
					</div>
				</div>
			</div>
		</a>
	</div>
	<div class="tile is-parent">
		<a href="modal-horaires.php" class="tile is-child box button-box<?php echo $which=="horaires"?' is-selected':''; ?>">
			<p class="heading has-text-centered has-text-weight-bold">Horaires</p>
			<div class="field is-grouped is-grouped-multiline">
				<div class="control">
					<div class="tags has-addons">
						<span class="tag is-light">Anna</span>
						<span class="tag is-info">10h</span>
					</div>
				</div>
				<div class="control">
					<div class="tags has-addons">
						<span class="tag is-light">Clément</span>
						<span class="tag is-info">10h</span>
					</div>
				</div>
				<div class="control">
					<div class="tags has-addons">
						<span class="tag is-light">Djamila</span>
						<span class="tag is-info">9h</span>
					</div>
				</div>
				<div class="control">
					<div class="tags has-addons">
						<span class="tag is-light">Sarah</span>
						<span class="tag is-info">8h</span>
					</div>
				</div>
				<div class="control">
					<div class="tags has-addons">
						<span class="tag is-light">Toutoune</span>
						<span class="tag is-info">8h</span>
					</div>
				</div>
				<div class="control">
					<div class="tags has-addons">
						<span class="tag is-light">Timothee</span>
						<span class="tag is-warning">8h</span>
					</div>
				</div>
				<div class="control">
					<div class="tags has-addons">
						<span class="tag is-light">Soheil</span>
						<span class="tag is-danger">8h</span>
					</div>
				</div>
			</div>
		</a>
	</div>
</div>
<?php 
}

?>
