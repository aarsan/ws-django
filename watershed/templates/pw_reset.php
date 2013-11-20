<?php include('./view/outside_header.php'); ?>

    <div class="wrap">
    
            <div class="content">
            <img src="/images/watershedicon.png" class="watershed-icon" alt=" "/>
            <img src="/images/WS_landing_logo.png" class="watershed-title" alt="Watershed"/>
            <div class="tab">
                <div class="tab-content">
                    <p>Please enter your email address and new password below:</p>
                    <form method="post" action="/members/pw_reset/<?php echo $reset_id; ?>">
                        <input type="text" name="email" placeholder="Email Address" /></br></br>
                    	<input type="password" name="pw_1" placeholder="Enter New Password" /></br></br>
                    	<input type="password" name="pw_2" placeholder="Re-type Password" /></br></br></br>
                    	<input type="submit" value="Submit" style="width: 100px" />
                    </form>             
                   
                </div> <!--tab-content-->
            </div> <!--tab-->
        </div> <!--content-->
    </div> <!--wrap-->

<?php include('./view/outside_footer.php'); ?>