<?php include('./view/header.php'); ?>
<?php include('./view/groupnav.php'); ?>

<div id="content">
    <div id="label">
    <h2>Passive Member Form</h2>
    </div>
        <form action="/members/add_passive" method="post" />
        
        <label>Email address:&nbsp;</label>
        <input type="text" class="text" name="email_address" />

        <label>Nick Name</label>
        <input type="text" class="text" name="nick_name" />
        <input type="submit" value="Add Member to Group" />

        </form>            
    <p><a href="/dashboard/">&#60;&#60;&#32; Return to dashboard</a></p>
</div>
<?php include('./view/footer.php'); ?>