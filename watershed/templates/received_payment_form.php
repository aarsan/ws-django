<?php include('./view/header.php'); ?>
<?php include('./view/groupnav.php'); ?>

<div id="content">
    <div id="label">
    <h2>Receive payment</h2>
    </div>
    <p>Select the member you received payment from. (?)</p>
        <table id="table-1">
            <thead>
                <th>Group Member</th>
                <th>Member's Balance</th>
                <th></th>
            </thead>
            <tbody>
            <?php foreach ($managed_group_members as $member) : ?>
                <tr>
                    <td><?php echo $member['nick_name']; ?></td>
                    <td>$<?php echo $member['balance']; ?></td>
                    <td><a href="./?action=received_payment&member_ID=<?php echo $member['member_ID']; ?>" class="btn">select</a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <p><a href="/dashboard/">&#60;&#60;&#32; Return to dashboard</a></p>
</div>

<?php include('./view/footer.php'); ?>