<!DOCTYPE html>

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<title>Watershed - A better way to manage shared expenses - Application for web, iphone, ipad and android</title>
	
	<link rel="shortcut icon" href="images/favicon.ico">

	<link rel="stylesheet" href="../styles/reset.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="../styles/landing.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<script src="../scripts/jquery.js" type="text/javascript" charset="utf-8"></script>
   
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-31598626-1']);
  _gaq.push(['_setDomainName', 'watershedapp.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</head>

<div id="register-content">

    <div id="label">
    <h2>Create a Watershed Account</h2><br/>
    </div>
        <form action="/register/create_account" method="post" onSubmit="return checkForm(this)" >
            <input type="hidden" name="action" value="add_member" />

                <input style="border-radius:4px; border:1px solid; font-size:1em; padding: 4px;" type="text" class="text" name="email_address" placeholder="Email"/>
                <p style="font-size:.7em;">Must use a valid email address</p>
                <br />

                <input style="border-radius:4px; border:1px solid; font-size:1em; padding: 4px;"type="password" class="text" name="password"placeholder="Password" />
                <p style="font-size:.7em;">Password must be at least 3 characters</p>
                <br />

                <input style="margin-bottom: 27px; border-radius:4px; border:1px solid; font-size:1em; padding: 4px;"type="password" class="text" name="verify" placeholder="Verify Password"/>  
                <br />

                <input style="border-radius:4px; border:1px solid; font-size:1em; padding: 4px;"type="text" class="text" name="nick_name" placeholder="Nick Name" />
                <p style="font-size:.7em;">Ten character maximum</p>

                <br /><br/>

                <label>&nbsp;</label>
                <input style="margin-left:-10px;" type="submit" value="Create Account"/>
        </form>                <br/>
            <p><a href="/login/">or Return to Login Page</a></p>
</div>
    <div id="EmailAlert" class="alert">
            <p>Please enter a valid email address.</p>
        <form style="text-align:right">
        <input 
            type="button" 
            value="OK" 
            style="width:75px;" 
            onclick="document.getElementById('EmailAlert').style.display='none'">
        </form>
    </div>
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
    <div id="NickNameAlert" class="alert">
            <p>Nick name cannot be blank and cannot exceed 10 characters.</p>
        <form style="text-align:right">
            <input 
            type="button" 
            value="OK" 
            style="width:75px;" 
            onclick="document.getElementById('NickNameAlert').style.display='none'">
        </form>
    </div>
    <div id="AccountCreatedAlert" class="alert">
             <p>Your account is created. Please login from the login page.</p>
        <form style="text-align:right">
        <input 
            type="button" 
            value="OK" 
            style="width:75px;" 
            onclick="document.getElementById('AccountCreatedAlert').style.display='none'">
        </form>
    </div>
    
                <div id="footer">
        	<div id="footer-inner">
				<p class="logo">
					<a href="/">
					<img src="../images/ws-logo-footer.png" alt="Watershed"></a>
					Share &#43;  Stay Square
					</p><br/>
									
				<ul id="footer-nav">
					<li>
						<a id="f-home" href="../about/">About</a>
					</li>
					<li>
						<a href="../faq/">FAQ</a>
					</li>
					<li>
						<a href="../contact/">Contact</a>
					</li>
					<li>
						<a target="_blank" href="https://twitter.com/#!/watershedapp">Twitter</a>
					</li>
					<li>
						<a target="_blank" href="http://blog.watershedapp.com">Blog</a>
					</li>
					<li>
						<a href="../testimonials/">Testimonials</a>
					</li>
					
					<li>
						<a href="../terms/">Terms</a>
					</li>
					<li>
						<a href="../privacy/">Privacy</a>
					</li>

				</ul>
				
					<p>Copyright &copy; 2011-<?php echo date("Y"); ?> Progger, LLC.   &#124;   Version (0.9.4.22)  &#124;  <a href="http://nytm.org/made">Handcrafted in Brooklyn, NY</a></p>
		</div>
	</div>


    <div id="EmailAlert" class="alert">
            <p>Please enter a valid email address.</p>
        <form style="text-align:right">
        <input 
            type="button" 
            value="OK" 
            style="width:75px;" 
            onclick="document.getElementById('EmailAlert').style.display='none'">
        </form>
    </div>
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
    <div id="NickNameAlert" class="alert">
            <p>Nick name cannot be blank and cannot exceed 10 characters.</p>
        <form style="text-align:right">
            <input 
            type="button" 
            value="OK" 
            style="width:75px;" 
            onclick="document.getElementById('NickNameAlert').style.display='none'">
        </form>
    </div>
    <div id="AccountCreatedAlert" class="alert">
             <p>Your account is created. Please login from the login page.</p>
        <form style="text-align:right">
        <input 
            type="button" 
            value="OK" 
            style="width:75px;" 
            onclick="document.getElementById('AccountCreatedAlert').style.display='none'">
        </form>
    </div>

</body>	
</html>