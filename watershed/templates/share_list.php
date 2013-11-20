<?php include './view/header.php'; ?>
<?php include '../view/groupnav.php'; ?>

<div id="main">

	<h1><?php echo $nick; ?>'s Shares List</h1>
	
	    <div id="content">
		    <!-- display a table of Shares -->
			<table>
				<tr>
					<th>Asset Description</th>
					<th>Asset Cost</th>
					<th class="right">% Ownership<th>
					<th>&nbsp;</th>
				</tr>
				
				<?php foreach ($shares as $share) : ?>
				<tr>
                                                                               
					<td><?php echo $share['asset_desc']; ?></td>
                    <td><?php echo $share['asset_cost']; ?></td>
					<td class="right"><?php echo $share['percent_owner']; ?></td>
                              
                </tr>
				<?php endforeach; ?>
			</table>
			<p><a href="?action=show_member_info&member_ID=<?php echo $member_ID; ?>">Back to Member Info</a></p>
			<p><a href="?action=show_add_share_form">Add Share</a></p>
	    </div>
</div>
<?php include './view/footer.php'; ?>