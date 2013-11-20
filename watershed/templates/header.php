<?php

if(!isset($_SESSION['org_ID'])) {
	$notifications = NULL;
	$dashboard = NULL;
	$switchgroup = NULL;
	$group = "<li><a href='/groups/'><i class='icon-share-alt'></i>&nbsp;&nbsp;Groups</a></li>";;


} else {

	//$total = GroupmemberDB::getGroupMemberInfo($_SESSION['member_ID'], $_SESSION['org_ID'])->getNotifications();
	//$notifications = "<a href='/notifications/'>Notifications: <strong>$total</strong></a>";
	$dashboard = "<li><a href='/dashboard/'><i class='icon-home'></i>&nbsp;&nbsp;Dashboard</a></li>
				  <li class='divider'></li>";
	$switchgroup = "<li><a href='/groups/'><i class='icon-share-alt'></i>&nbsp;&nbsp;Switch Group</a></li>";
	$group = NULL;
}

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Watershed</title>
        <link rel="stylesheet" href="/t-bstrap/css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="/styles/main.css" type="text/css">
        <script LANGUAGE="JavaScript" SRC="/scripts/register_password_validate.js"></script>
        <script LANGUAGE="JavaScript" SRC="/scripts/jquery-1.7.1.js"></script>
        <script LANGUAGE="JavaScript" SRC="/t-bstrap/js/bootstrap.js"></script>
        <script type="text/javascript">
        	$('.dropdown-toggle').dropdown()
        </script>
        <script type="text/javascript">
                var _gaq = _gaq || [];
                _gaq.push(['_setAccount', 'UA-28304116-1']);
                _gaq.push(['_setDomainName', 'citycorner.org']);
                _gaq.push(['_trackPageview']);

                (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
                })();
        </script>
    </head>
    <body>
    <div id="page">
        <div id="header">
            <div id="topmenu">
	            <div class="logo"><img src="/images/ws-logotop.png" alt="WATERSHED"/></div> 
	            <div class="main">
	                BETA&nbsp;&nbsp;&nbsp;
	            </div>
	            <div class="profile">
	            	<div class="btn-group">
						  <a class="btn btn-inverse dropdown-toggle" data-toggle="dropdown" href="#">
						  	<i class="icon-user icon-white"></i>&nbsp;&nbsp;Hi, <?php echo $_SESSION['nick_name']; ?>!
						    <b class="caret"></b>
						  </a>
						  <ul class="dropdown-menu">
						  		<?php echo $dashboard; ?>
						        <?php echo $switchgroup; ?>
						        <?php echo $group; ?>
							    <li><a href="/profiles/<?php echo $_SESSION['member_ID']; ?>"><i class="icon-user"></i>&nbsp;&nbsp;Edit Profile</a></li>
							    <li><a href="/settings/"><i class="icon-cog"></i>&nbsp;&nbsp;Settings</a></li>
							    	<li class="divider"></li>
		                		<li><a href="/logout/">Sign Out</a></li>
						  </ul>
					</div>
			    </div>
		    </div>
        </div>
        
        <div id="mainwrap">
        
<nav id="side-nav">
            <div class="arrow"><img src="/images/top-arrow-nobg.png" alt=""/></div> 

        	
	<aside id="sidebar">
		<nav id="primary">
			
		   </br>
		   </br>
           <div class="side-nav-waves"><img src="/images/waves-white.png" alt="……………"/></div> 
		
		<nav id="primary">
			<ul>
				<li>
					<a href="/profiles/<?php echo $_SESSION['member_ID']; ?>">My Profile</a>
				</li>
				<li>
					<a href="/groups/">My Groups</a>
				</li>
			</ul>
		</nav>
				
		<div class="side-nav-waves"><img src="/images/waves-white.png" alt="……………"/></div> 

				<nav id="secondary">
			<ul>
				<li>
					<a target="_blank" href="/about/">About Watershed</a>
				</li>
				<li>
					<a target="_blank" href="http://blog.watershedapp.com">Watershed Blog</a>
				</li>
				<li>
				<a href="/feedback/">Leave Us Feedback&nbsp;&nbsp;&nbsp;<i class="icon-comment icon-white"></i></a>
				</li>
				<li>
				<a target="_blank" href="/contact/">Contact</a>
				</li>

			</ul>
		</nav>

	</aside>
</nav>