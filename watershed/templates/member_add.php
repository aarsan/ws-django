<?php include './view/header.php'; ?>
<?php include '../view/groupnav.php'; ?>

<div id="main">
	<h1>Add member</h1>
	<form action="index.php" method="post" id="add_member_form">
		<input type="hidden" name="action" value="add_member" />
		
		<label>Nick Name:</label>
		<input type="input" name="nick_name" />
		<br />
		
		<label>Email Address:</label>
		<input type="input" name="email_address" />
		<br />
		
		<label>Password:</label>
		<input type="input" name="password" />
		<br />
		
		<label>&nbsp;</label>
		<input type="submit" value="Add Member" />
		<br />
	</form>
	        <p><a href="../dashboard/">&#60;&#60;&#32;Return to Group Dashboard</a></p>

</div>
<?php include './view/footer.php'; ?>