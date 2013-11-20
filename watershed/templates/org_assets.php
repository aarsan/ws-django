<?php include './view/header.php'; ?>
<?php include '../view/groupnav.php'; ?>

<div id="main">

	<h1>Asset List</h1>
	
	<div id="sidebar">
			<!-- display list of assets within Org -->
			<h2>Assets in Org:</h2>
			<ul class="nav">
			<?php foreach ($assets as $asset) : ?>
				<li>
					<?php echo $asset['asset_ID']; ?>
					<?php echo $asset['asset_desc']; ?>
				</li>
			<?php endforeach; ?>
			</ul>
	</div>
	<p><a href="?action=create_org_form">Create new Org</a></p>
</div>
<?php include './view/footer.php'; ?>