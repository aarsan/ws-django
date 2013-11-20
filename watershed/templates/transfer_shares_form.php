<?php include('./view/header.php'); ?>
<?php include('./view/groupnav.php'); ?>

<div id="content">
  <div id="label">
  <h2>Choose the asset you'd like to modify</h2>
  </div>
    <div id="transfer_shares_form">
    <table id="table-1">
        <thead>
            <th>Asset Description</th>
            <th>Asset Value</th>
            <th>Your Investment</th>
            <th>Your % of ownership</th>
        </thead>
        <?php foreach ($shares as $share) : ?>
        <tbody>
        <tr>
            <td><?php echo $share->GetAssetDesc(); ?></td>
            <td>$<?php echo number_format($share->getAssetValue(),2); ?></td>
            <td>$<?php echo number_format($share->getPercentOwner(),2); ?></td>
            <td>~<?php echo number_format($share->getPercentOwner() / $share->getAssetValue() * 100,2) ?>%</td>
            <td><form action="." method="post" >
                <input type="hidden" name="action" value="transfer_shares"/>
                <input type="hidden" name="asset_ID" value="<?php echo $share->getAssetID(); ?>" />
                <input type="submit" value="modify" style="font-size:82.5%"/></form></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <p><a href="../dashboard/">Back to dashboard</a></p>
    </div>
</div>
<?php include('./view/footer.php'); ?>