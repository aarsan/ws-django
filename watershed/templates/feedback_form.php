<?php include('./view/header.php'); ?>

<script LANGUAGE="JavaScript">
        function CountLeft(field, count, max) {
        if (field.value.length > max)
        field.value = field.value.substring(0, max);
        else
        count.value = max - field.value.length;
        }
</script>

<div id="content">
	<h2>Please report any bugs, suggestions, problems, or enhancement ideas. Thanks!</h2>
	<form method="post" action="/feedback/new/<?php echo $_SESSION['member_ID']; ?>">
	<input type="hidden" name="action" value="comment" />
	<font size="1" face="arial, helvetica, sans-serif">
	<textarea name="comment" cols="40" rows="5" style="width:560px;height:190px;background-color:#FFFFFF;resize:none;" onKeyDown="CountLeft(this.form.comment,this.form.left,500);" onKeyUp="CountLeft(this.form.comment,this.form.left,500);" >
	</textarea>
	<br>
	<input readonly type="text" name="left" size=3 maxlength=3 value="500">
	<br>
	<input class="btn" type="submit" value="Submit" />
	</form>
</font>
</div>

<?php include('./view/footer.php'); ?>