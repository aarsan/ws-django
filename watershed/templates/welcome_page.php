<?php include('./view/header.php'); ?>
<script>
    $('.btn').button('toggle')
</script>
<div id="notopnav-title">
  <table>
    <tr>
        <td><h2>My Groups</h2></td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td><a href="/groups/create_form" class="btn btn-primary" data-toggle="button" >Create New Group</a></td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td><?php echo $inv_notice; ?></td>
    </tr>
  </table>
</div>
<div id="content">
    <?php echo $content; ?>
</div>
<?php include('./view/footer.php'); ?>
    </div>
</div>