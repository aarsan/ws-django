<?php include('./view/header.php'); ?>
<?php include('./view/groupnav.php'); ?>

<div id="content">
    <div id="label">
    <h2>You sent the following payments which have not yet been accepted.</h2>
    </div>
    <table id="table-1">
    <thead>
        <th>Payment To</th>
        <th>Description</th>
        <th>Payment Amount</th>
    </thead>
    <tbody>
    <?php foreach ($sent_payment_approvals AS $approvals) : ?>
    <tr>
      <td><?php echo $approvals['nick_name']; ?></td>
      <td><?php echo $approvals['description']; ?></td>
      <td>$<?php echo number_format($approvals['amount'],2); ?></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
    </table>
    <p><a href="../dashboard/">&#60;&#60;&#32; Return to dashboard</a></p>
</div>

<?php include('./view/footer.php'); ?>