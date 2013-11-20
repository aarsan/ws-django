<?php include('./view/header.php'); ?>
<?php include('./view/groupnav.php'); ?>

<div id="content">
    <div id="label">
        <h2>The following share changes still need approval:</h2>
    </div>
        <table id="table-1">
            <thead>
                <th style="font-size: 150%" >Description</th>
                <th style="font-size: 150%" >Approved</th>
                <th style="font-size: 150%" >Awaiting approval</th>
                <th></th>
            </thead>
            <tbody>
            <?php foreach ($sent_share_change_approvals AS $changes) : ?>
                <tr>
                  <td style="font-size: 100%" ><?php echo $changes['asset_desc']; ?></td>
                  <td style="font-size: 100%" ><?php echo $changes['approved_count']; ?></td>
                  <td style="font-size: 100%" ><?php echo $changes['unapproved_count']; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <p><a href="../dashboard/">&#60;&#60;&#32; Return to dashboard</a></p>
</div>

<?php include('./view/footer.php'); ?>