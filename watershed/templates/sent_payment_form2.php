<?php include('./view/header.php'); ?>
<?php include('./view/groupnav.php'); ?>

<div id="content">
    <div id="label">
    <h2>Please enter an amount and description</h2>
    </div>
        <form action="/payment/record/" method="post" >
        <input type="hidden" name="action" value="record_payment" />
        <input type="hidden" name="payee" value="<?php echo $member_ID; ?>" />
        <input type="hidden" name="payer" value="<?php echo $_SESSION['member_ID']; ?>">
            <table id="table-1">
                    <tr>
                        <td>Member you sent payment to:</td> 
                        <td><?php echo $member_nick; ?></td>
                    </tr>
            </table>
            </br>
            </br>
            <table id="table-1">
                <thead>
                    <th>Amount</th>
                    <th>Description</th>
                </thead>
                <tbody>
                    <tr>
                        <td>$<input type="input" name="amount" /></td>
                        <td><input type="input" name="description" /></td>
                    </tr>
                </tbody>
            </table>
            </br>
            </br>
        <input class="btn btn-success" type="submit" value="Record Payment" />
        </form>
    <p><a href="../dashboard/">&#60;&#60;&#32; Return to dashboard</a></p>
</div>

<?php include('./view/footer.php'); ?>