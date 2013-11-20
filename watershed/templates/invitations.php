<?php include('./view/header.php'); ?>
<div id="content">
  <div id="label">
  <h2>Group Invitations</h2>
  </div>
    <div id="invitations">
        <table id="table-1">
            <?php foreach ($invitations AS $invitation) : ?>
                <tr>
                    <td><?php echo $invitation->getOrgName(); ?></td>
                    <td><a class="btn" href="/invitations/<?php echo $invitation->getInvitationID(); ?>/accept">accept</a>
                        <a class="btn" href="/invitations/<?php echo $invitation->getInvitationID(); ?>/deny">deny</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>
<?php include('./view/footer.php'); ?>