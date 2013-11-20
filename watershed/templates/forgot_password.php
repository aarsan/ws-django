<?php include('./view/outside_header.php'); ?>

    <div class="wrap">
    
            <div class="content">
            <img src="/images/watershedicon.png" class="watershed-icon" alt=" "/>
            <img src="/images/WS_landing_logo.png" class="watershed-title" alt="Watershed"/>
            <div class="tab">
                <div class="tab-content">
                    <p></p>
                    <p>Enter your e-mail address and we'll send you instructions on how to reset your password.</p>          
                    <form method="post" action="/forgot/password">
                    	<input type="text" name="email" placeholder="Email Address" /></br></br></br>
                    	<input type="submit" style="height: 25px; width: 100px" value="Help!" />
                    </form>
                </div> <!--tab-content-->
            </div> <!--tab-->
        </div> <!--content-->
    </div> <!--wrap-->

<?php include('./view/outside_footer.php'); ?>