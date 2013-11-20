<?php include('../view/header.php'); ?>
<?php include '../view/groupnav.php'; ?>

<table>
	<thead>
		<th>Group Name</th>
	</thead>
	<tbody>
		<?php foreach ($groups as $group) : ?>
		<tr>
			<td><?php echo $group->getName(); ?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<?php include('../view/footer.php'); ?>