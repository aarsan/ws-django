<?php include('./view/header.php'); ?>
<?php include('./view/groupnav.php'); ?>

    <script>
                $(function () {
                    $("#tip")
                        .popover({
                            delay: { show: 200, hide: 500 },
                        }) 
                    })
    </script>

<div id="content">
    <div id="label">
        <h1>Dashboard</h1>
    </div>
        <table>
            <tr>
                <td>Group Name:</td>
                <td style="font-size: 200%"><?php echo $group_name; ?></td>                
            </tr>
            <tr>
                <td></br></td>
            </tr>
            <tr>
                <td>Balance:</td>
                <td style="font-size: 150%" ><?php echo $debt_credit_message; ?>&nbsp;<?php echo $debt_credit_amount; ?>
                    <a href='#' id='tip' data-placement='right' rel='popover' title='Credit / Debit Amount' data-content='This is your group balance. Click "View History Log" for details.'>
                    <i class="icon-question-sign"></i></a></td>
            </tr>
            <tr>
                <td></br></td>
            </tr>
            <tr>
                <td>Value of your shares:&nbsp;</td>
                <td style="font-size: 150%"><a href="/assets/<?php echo $_SESSION['member_ID']; ?>">
                    $<?php echo $shares_value; ?></a>
                    <a href='#' id='tip' data-placement='right' rel='popover' title='Value of your assets' data-content='This reflects the total value of the shares you own.'>
                    <i class="icon-question-sign"></i></a></td>
            </tr>
            <tr>
                <td></br></td>
            </tr>
            <tr>
                <td>Members in group:</td>
                <td style="font-size: 150%"><a href="../members/"><?php echo $member_count; ?></a>
                    <a href='#' id='tip' data-placement='right' rel='popover' title='Number of Members in Group' data-content='This reflects the total value of the shares you own.'>
                    <i class="icon-question-sign"></i></a></td>
            </tr>
            <tr>
                <td></br></td>
            </tr>
            <tr>
                <td>Notifications:</td>
                <td><?php echo $notifications; ?></td>
            </tr>
        </table>
            </br>
            <p><a class="btn btn-primary" href="/translog/<?php echo $member_ID; ?>">View History Log</a></p>
</div>
<?php include('./view/footer.php'); ?>