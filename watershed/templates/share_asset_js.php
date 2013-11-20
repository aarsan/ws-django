<?php include './view/header.php'; ?>
<?php include '../view/groupnav.php'; ?>

<div id="main">
	    <div id="content">
		<h2>You just recorded the following purchase:</h2>
		    <table>
				<tr>
					<td><b>Asset description</b></td> 
					<td><?php echo $asset_details['asset_desc']; ?></td>
                </tr>
				<tr>
					<td><b>Asset cost</b></td>
					<td>$<?php echo $asset_details['asset_cost']; ?></td>
				</tr>
			</table>
		</div>
</div>
<h2></h2>
<div id="content">
	<h3>Check the box next to the members who this will be shared with:</h3>
	    <div id="content">
			
			<form method="post" action="?action=add_shares&asset_ID=<?php echo $asset_ID; ?>" id="add_shares" name="share_form">
					<table>
						<?php foreach ($members as $members) : ?>
						<tr>
							<td><input type="checkbox" name="member_ID[]" onclick="document.getElementById('thebox').disabled=(this.checked)?0:1" value="<?php echo $members['member_ID']; ?>"</td>
							<td><?php echo $members['nick_name']; ?></td>
							<td><span id="myGroup"><input type="text" id="thebox" disabled name="percent_owner_<?=$members['member_ID']?>" value="0" size="3"></span></td>
						</tr>
						<?php endforeach; ?>
					</table>
				<input type="submit" value="Click to distribute shares" />
			</form>
		</div>
</div>

<?php include './view/footer.php'; ?>