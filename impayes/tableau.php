<?php 
include_once 'vars.php';
 ?>
<table class="table is-striped is-fullwidth is-hoverable">
	<tbody>
	<?php foreach ($impayes as $impaye): ?>		
		<tr class="is-middle <?php echo $impaye['paye']?"has-text-dark":"has-text-danger"; ?>">
			<td><?php echo $impaye['date'] ?></td>
			<td><?php echo $impaye['qui'] ?></td>
			<td class="has-text-right"><?php echo $impaye['combien'] ?></td>
			<td>
				<span class="is-hidden-touch"><?php echo $impaye['client']; ?></span>
				<span class="is-hidden-desktop"><i class="fa fa-comment-o"></i></span>
			</td>
			<td>
				<button class="button is-info is-small" type="submit">
					<i class="fa fa-cog"></i>
				</button>
			</td>
		</tr>
	<?php endforeach ?>
	</tbody>
</table>