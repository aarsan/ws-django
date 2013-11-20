<?php include './view/header.php'; ?>
<?php include '../view/groupnav.php'; ?>

<div id="main">

	<h1>Org Information</h1>
	
	<div id="sidebar">
			<!-- display Org name -->
			<h2><?php echo $org_name; ?></h2>
			
	</div>
	    <div id="content">
			<!-- display org information -->
			<table>
				<tr>
					<th>Established</th>
					<th>Number of Members</th>
					<th>Neighborhood</th>
				</tr>
			<?php foreach ($org_details as $org) : ?>
				<tr>					
					<td><?php echo $org['creation_date']; ?></td>
					<td>2</td>
					<td><?php echo $org['org_hood']; ?></td>
				</tr>
				<?php endforeach; ?>
			</table>
				<p><a href="?action=list_members">List members in Org<a/></p>
				<p><a href="?action=list_orgs">Back to Org list</a></p>
	    </div>
</div>
<?php include './view/footer.php'; ?>