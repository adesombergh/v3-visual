<div class="field has-addons">
	<p class="control is-expanded has-icons-left">
		<input class="input is-small" type="text" placeholder="Pièces">
		<span class="icon is-small is-left">
			<i class="fa fa-eur"></i>
		</span>
	</p>
</div>

<?php 
$entrees = array("  5"," 10"," 20"," 50","100");
 ?>
 <?php foreach ($entrees as $billet): ?>
<div class="field has-addons">
    <p class="control">
        <a href="" class="button is-static is-small">
            <?php echo str_replace(" ", "&nbsp;", $billet) ?> €
        </a>
    </p>
    <p class="control is-expanded has-icons-left">
        <input class="input is-small" type="text" placeholder="Billets de <?php echo $billet ?>">
        <span class="icon is-small is-left">
            <i class="fa fa-money"></i>
        </span>
    </p>
    <p class="control">
        <a class="button is-static is-small">
            200 €
        </a>
    </p>
</div>
 <?php endforeach ?>