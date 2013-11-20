<?php include('./view/header.php'); ?>
<?php include('./view/groupnav.php'); ?>

<div id="content">
    <div id="label">
    <h2>Active Member Form</h2>
    </div>
        <form method="post" action="/members/add_active" />
       
        <label>Email address:&nbsp;</label>
        <input type="text" class="text" name="email_address" />

        <input type="submit" value="Send Invitation" />

        </form>
        <p><a href="../dashboard/">&#60;&#60;&#32;Dashboard</a></p>
            
</div>
<?php include('./view/footer.php'); ?>