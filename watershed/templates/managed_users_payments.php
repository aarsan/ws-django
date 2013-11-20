<?php include('../view/header.php'); ?>
<?php include '../view/groupnav.php'; ?>

<div id="content">
    <div id="label">
    <h2>Payment center for Managed Users</h2>
    </div>
    <form action="." method="post" >
        <input type="hidden" name="action" value="record_payment" />
        <input type="hidden" name="payer" value="<?php echo $payer['member_ID']; ?>" />
        <input type="hidden" name="payee" value="<?php echo $payee['member_ID']; ?>" />
            <table id="table-1">
                <thead>
                    <th>Payer</th>
                    <th>Payee</th>
                    <th>Amount</th>
                    <th>Description</th>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <select name="payer">
                                <?php foreach ($managed_group_members as $payer) : ?>
                                <option value="<?php echo $payer['member_ID']; ?>">
                                <?php echo $payer['nick_name']; ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                        <td>
                            <select name="payee">
                                <?php foreach ($managed_group_members as $payee) : ?>
                                <option value="<?php echo $payee['member_ID']; ?>">
                                <?php echo $payee['nick_name']; ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                        <td>$<input type="input" name="amount" /></td>
                        <td><input type="input" name="description" /></td>
                    </tr>
                </tbody>
            </table>
        <input type="submit" value="Record Payment" />
        </form>
        <p><a href="../dashboard/">&#60;&#60;&#32;Return to Group Dashboard</a></p>
</div>
<?php include('../view/footer.php'); ?>