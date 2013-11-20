<?php include '../view/header.php'; ?>
<?php include '../view/groupnav.php'; ?>

<div id="content">
    <div id="label">
    <h2>Record a Payment</h2>
    </div>
    <h4><?php echo $debt_credit_message; ?>&nbsp;<?php echo $debt_credit_amount; ?></h4>
        <table id="table-1">
            <thead>
                <th>Group Member</th>
                <th>Balance</th>
                <th>Payment Amount</th>
            </thead>
            <tbody>
            <?php foreach ($members1 as $member) : ?>
                <tr>
                    <td><?php echo $member['nick_name']; ?></td>
                    <td>$<?php echo $member['balance']; ?></td>
                    <td><form action="." method="post">
                        <input type="hidden" name="payee" value="<?php echo $member['member_ID']; ?>" />
                        <input type="hidden" name="action" value="record_payment" />
                        <input type="hidden" name="payer" value="<?php echo $_SESSION['member_ID']; ?>" /></td>
                    <td>$<input type="input" name="amount" /></td>
                    <td><input type="submit" value="pay member" class="btn btn-success" style="font-size:82.5%" /></td>
                        </form>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <!-- <h4>Use the form below to record a payment:</h4>
        <form action="." method="post" >
        <input type="hidden" name="action" value="record_payment" />
        <input type="hidden" name="payer" value="<?php echo $_SESSION['member_ID']; ?>" />
            <table id="table-1">
                <thead>
                    <th>Group member</th>
                    <th>Amount</th>
                    <th>Description</th>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <select name="payee">
                                <?php foreach ($members2 as $member) : ?>
                                <option value="<?php echo $member['member_ID']; ?>">
                                <?php echo $member['nick_name']; ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                        <td>$<input type="input" name="amount" /></td>
                        <td><input type="input" name="description" /></td>
                    </tr>
                </tbody>
            </table>
        <input type="submit" value="pay member" />
        </form>
    -->
    <p><a href="../dashboard/">&#60;&#60;&#32; Return to dashboard</a></p>
</div>
<?php include '../view/footer.php'; ?>