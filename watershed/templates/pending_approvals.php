<?php include('./view/header.php'); ?>
<?php include('./view/groupnav.php'); ?>

<div id="content">
    <div id="label">
    <h2>You received the following payments. Accept or Deny.</h2>
    </div>
    <table id="table-1">
    <thead>
        <th>Payment From</th>
        <th>Description</th>
        <th>Payment Amount</th>
    </thead>
    <tbody>
    <?php foreach ($payment_approvals AS $approvals) : ?>
    <tr>
      <td><?php echo $approvals['nick_name']; ?></td>
      <td><?php echo $approvals['description']; ?></td>
      <td>$<?php echo number_format($approvals['amount'],2); ?></td>
      <td><form action="/payments/accept/" method="post" >
          <input type="hidden" name="action" value="approve_deny_payments" />
          <input type="hidden" name="approval_ID" value="<?php echo $approvals['approval_ID']; ?>" />
          <input type="submit" name="accept" value="accept" />
          <input type="submit" name="deny" value="deny" />
          </form></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
    </table>
    <p><a href="../dashboard/">&#60;&#60;&#32; Return to dashboard</a></p>
</div>
<?php include('./view/footer.php'); ?>