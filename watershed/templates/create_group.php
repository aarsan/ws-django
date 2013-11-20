<?php include('./view/header.php'); ?>
<?php echo $ajax; ?>
<div id="notopnav-title">
<h2>Create Group</h2>
</div>
<div id="content">
	<form id="new_group_form" >   
    <table id="table-1">
       	<thead>
       		<th>Group Name</th>
       		<th>Group Description</th>
       	</thead>
       	<tbody>
       		<tr>
       			<td><input type="text" name="group_name" id="group_name" ></td>
       			<td><input type="text" name="group_loc" id="group_loc" ></td>
       		</tr>
        </tbody>
    </table>
    <input class="btn" type="button" value="Submit" id="button" >
    </form>
</br>
</br>
</br>
    <div id="data_box1">
    </div>
</div>
<?php include('./view/footer.php'); ?>