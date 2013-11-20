<?php include('./view/header.php'); ?>
        
<div id="notopnav-title"><h2>My Profile</h2></div>
    <div id="content">
        <div id="profile">
            <div id="profile_pic">
            <img src="../images/photos/photo.png" alt="Pulpit rock" width="120" height="120" />
            </div>
                <div id="profile_info">
                <table>
                    <tr>
                        <td>User Name:</td>
                        <td><?php echo $_SESSION['nick_name']; ?></td>
                    </tr>
                    <tr>
                        <td>Joined:</td>
                        <td><?php echo $member_since; ?></td>
                    </tr>
                    <tr>
                        <td>Total Balance:</td>
                        <td><?php echo $debt_credit_message; ?>&nbsp;<?php echo $debt_credit_amount; ?>
                          <a href="#" id="tip" data-placement='right' rel='popover' title='You are owed' 
                          data-content='This is your total balance across all your groups.' ><i class="icon-question-sign"></i></a>
                          </td>
                    </tr>
                </table>
                </div>
           
           <div id="profilespacer"></div>

           <div id="change_password">
                <h4>Change Password</h4>
            <form class="well form-inline" action="/members/<?php echo $_SESSION['member_ID']; ?>/change_pw/" method="post" onSubmit="return checkForm(this)" id="registration_form">

                <label>Current Password:</label>
                <input type="password" class="text" class="input-small" placeholder="Password" name="cur_password" size=15 />
                <br />
                <br />

                <label>New Password:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="password" class="text" class="input-small" placeholder="Password" name="password" size=15 />
                <br />

                <label>Re-Enter:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="password" class="text" class="input-small" placeholder="Re-Enter" name="verify" size=15 style="margin-left: 9px;" />
                <br />
                <br />
                <br />

                <label>&nbsp;</label>
                <input class="btn" type="submit" value="Submit" style="margin-left: 57px;" />
            </form>
            </div>
<?php include('./view/footer.php'); ?>

    <div id="PasswordLengthAlert" class="alert">
             <p>Password must contain at least three characters.</p>
        <form style="text-align:right">
        <input 
            type="button" 
            value="OK" 
            style="width:75px;" 
            onclick="document.getElementById('PasswordLengthAlert').style.display='none'">
        </form>
    </div>
    <div id="PasswordMatchAlert" class="alert">
            <p>Please check that you've entered and confirmed your password.</p>
        <form style="text-align:right">
            <input 
            type="button" 
            value="OK" 
            style="width:75px;" 
            onclick="document.getElementById('PasswordMatchAlert').style.display='none'">
        </form>
    </div>
    <div id="AccountCreatedAlert" class="alert">
             <p>Your password has been changed.</p>
        <form style="text-align:right">
        <input 
            type="button" 
            value="OK" 
            style="width:75px;" 
            onclick="document.getElementById('AccountCreatedAlert').style.display='none'">
        </form>
    </div>
    <script>
                $(function () {
                    $("#tip")
                        .popover({
                            delay: { show: 200, hide: 500 },
                        }) 
                    })
    </script>