<?php include('./view/header.php'); ?>
<?php include('./view/groupnav.php'); ?>

<div id="content">
    <div id="label">
    <h2>Approve or Deny the following purchases.</h2>
    </div>
    <table id="table-1">
    <thead>
        <th>Description</th>
        <th>Total Cost</th>
        <th>Your Portion</th>
        <th>% Ownership</th>
        <th></th>
    </thead>
    <tbody>
    <?php foreach ($purchase_approvals AS $approvals) : ?>
    <tr>
        <td><?php echo $approvals['asset_desc']; ?></td>
        <td>$<?php echo number_format($approvals['asset_cost'],2); ?></td>
        <td>$<?php echo number_format($approvals['percent_owner'],2); ?></td>
        <td>~<?php echo number_format(($approvals['percent_owner'] / $approvals['asset_cost']) * 100,2) ?>%</td>
        <td><form action="../assets/new/" method="post" >
            <input type="hidden" name="action" value="approve_deny_purchase" />
            <input type="hidden" name="approval_ID" value="<?php echo $approvals['pending_asset_ID']; ?>">
            <input type="submit" name="accept" value="accept"/>
            <input type="submit" name="deny" value="deny" />
            </form></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
    </table>
    <p><a href="../dashboard/">&#60;&#60;&#32; Return to dashboard</a></p>
</div>
<?php include('./view/footer.php'); ?>