<?php include('./view/header.php'); ?>
<?php include('./view/groupnav.php'); ?>

<div id="content">
    <div id="label">
    <h2>The following purchase has not yet been approved:</h2>
    </div>
    <table id="table-1">
    <thead>
        <th>Date Purchased</th>
        <th>Description</th>
        <th>Total Cost</th>
        <th>Approved</th>
        <th>Approvals still needed</th>
    </thead>
    <tbody>
    <?php foreach ($sent_purchase_approvals AS $approvals) : ?>
    <tr>
        <td><?php echo $approvals['purchase_date']; ?></td>
        <td><?php echo $approvals['asset_desc']; ?></td>
        <td>$<?php echo number_format($approvals['asset_cost'],2); ?></td>
        <td><?php echo $approvals['approved_count']; ?></td>
        <td><?php echo $approvals['unapproved_count']; ?></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
    </table>
    <p><a href="../dashboard/">&#60;&#60;&#32; Return to dashboard</a></p>
</div>

<?php include('./view/footer.php'); ?>