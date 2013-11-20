<?php include './view/header.php'; ?>
<div id="main">

	<h2>Current asset List</h2>
	
	<div id="sidebar">
			<!-- display Org Name -->
			<p><?php echo $group_name; ?>&nbsp;-&nbsp;total spent:&nbsp;$<?php echo $tangible_spent; ?></p>
			
	</div>
	    <div id="content">
		<!-- display a table of assets -->
			<table>
				<tr>
					<th>Asset Description</th>
					<th>Asset Cost</th>
					<th>&nbsp;</th>
				</tr>
				<?php foreach ($assets as $asset) : ?>
				<tr>
					<td><?php echo $asset['asset_desc']; ?></td>
					<td><?php echo $asset['asset_cost']; ?></td>
			    </tr>
				<?php endforeach; ?>
			</table>
    <p><a href="../dashboard/">&#60;&#60;&#32; Return to dashboard</a></p>
	    </div>
</div>
<?php include './view/footer.php'; ?>