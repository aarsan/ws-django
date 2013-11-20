<?php include('../view/header.php'); ?>
<?php include('../view/groupnav.php'); ?>

<div id="main">
	<h2>Spending List</h2>
	<div id="sidebar">
			<p><?php echo $group_name; ?>&nbsp;-&nbsp;total spent:&nbsp;$<?php echo $total_org_spent; ?></p>	
	</div>
	    <div id="content">
			<table>
				<tr>
					<th>Purchase Description</th>
					<th>Item Cost</th>
					<th>&nbsp;</th>
				</tr>
				<?php foreach ($assets as $asset) : ?>
				<tr>
					<td><?php echo $asset['asset_desc']; ?></td>
					<td><?php echo $asset['asset_cost']; ?></td>
			    </tr>
				<?php endforeach; ?>
			</table>
        			<p><a href="../dashboard/">&#60;&#60;&#32;Return to Group Dashboard</a></p>
	    </div>
</div>
<?php include('../view/footer.php'); ?>