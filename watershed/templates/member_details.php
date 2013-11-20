<?php include('../view/header.php'); ?>
<?php include '../view/groupnav.php'; ?>

<div id="main">
    <div id="label">
    <h1>Member Information</h1>
    </div>
        <div id="content">
            <table id="table-1">
                <thead>
                    <tr>
                        <th>Belonging Groups</th>
                        <th>Member Type</th>
                    </tr>
                </thead>
                    <tbody>
                    <?php foreach ($member_info as $member) : ?>
                    <tr>                    
                        <td><?php echo $member['org_name']; ?></td>
                        <td><?php if ($member['is_self_managed'] == 1) {
                                echo 'SELF MANAGED';
                              } else {
                                echo '*** NOT SELF MANAGED ***';
                              } ?></td>
                        <td><form action="../translog/" method="post" >
                            <input type="hidden" name="org_to_member_ID" value="<?php echo $org_to_member_ID; ?>">
                            <input type="submit" name="view_log" value="View History Log" style="font-size:82.5%" />
                            </form></td>
                    </tr>
                </tbody>
                <?php endforeach; ?>
            </table>
            <p><a href=".">&#60;&#60;&#32;Return to member list</a></p>        
        </div>
</div>
<?php include('../view/footer.php'); ?>