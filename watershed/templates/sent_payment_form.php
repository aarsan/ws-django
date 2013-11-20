<?php include('./view/header.php'); ?>
<?php include('./view/groupnav.php'); ?>

<div id="content">
    <div id="label">
    <h2>Sent Payment</h2>
    </div>
    <p>Select the member you paid.</p>
        <table id="table-1">
            <thead>
                <th>Group Member</th>
                <th>Member's Balance</th>
            </thead>
            <tbody>
            <?php foreach ($members as $member) : ?>
                <tr>
                    <td><?php echo $member['nick_name']; ?></td>
                    <td>$<?php echo $member['balance']; ?></td>
                    <td><a href="./?action=sent_payment&member_ID=<?php echo $member['member_ID']; ?>" class="btn">select</a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        </form>
    <p><a href="../../dashboard/">&#60;&#60;&#32; Return to dashboard</a></p>
</div>
<?php include('./view/footer.php'); ?>