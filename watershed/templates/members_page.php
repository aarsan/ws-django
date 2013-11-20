<?php include('./view/header.php'); ?>

<div id="content">
    <div id="label">
    <h2>Please choose the type of member you want to add</h2>
    </div>
  <div id="active_members">
    <h4>Active Member</h4>
    <ul>
        <li>Requires a login</li>
        <li>Can record purchases and payments for Passive members</li>
        <li>Must approve payments and purchases</li>
        <li>A group must have at least 1 Active Member</li>
      <li>Can be converted to a Passive Member at any time</li>
    </ul>
    <a href="/members/invite_form" class="btn btn-info">Invite Active Member</a>

  </div>
  <div id="passive_members">
    <h4>Passive Member</h4>
    <ul>
        <li>Cannot Enter or Approve purchases</li>
        <li>Cannot Add or Invite members to the group</li>
        <li>Can only receive purchase notifications and reports via email</li>
        <li>Requires an Active Member to record payments and purchases for them</li>
    <li>Can be converted to an Active Member at any time</li>
  </ul>
  <a class="btn btn-info" href="/members/add_form" class="btn btn-info">Add Passive Member</a>

  </div>
  <div id="member_list">
  <table id="table-1">
                <thead>
                    <th>Nick Name</th>
                    <th>Email Address</th>
                    <th>Member Balance</th>
                    <th></th>
                </thead>
                <?php foreach ($members as $member) : ?>
                <tbody>
                <tr>
                    <td><?php echo $member['nick_name']; ?></td>
                    <td><?php echo $member['email_address']; ?></td>
                    <td>$<?php echo $member['balance']; ?></td>
                    <td><?php if ($member['is_self_managed'] == 1) {
                                echo ' ';
                              } else {
                                echo '*** Passive Member ***';
                              } ?></td>
                    <td><?php if ($member['is_self_managed'] == 0) {
                               echo "<form action=\"/translog/$member[member_ID]\" method=\"get\" >
                                     <input type=\"hidden\" name=\"org_to_member_ID\" value=\"$member[org_to_member_ID]\" />
                                     <input class=\"btn\" type=\"submit\" name=\"view_log\" value=\"View History Log\" />
                                     </form>";
                        } ?></td>
                    <td><?php if ($member['is_self_managed'] == 0) {
                                echo "<a class=\"btn btn-warning\" href=\"../assets/$member[member_ID]\">Manage Assets</a>";
                              } else {
                                echo '';
                              } ?></td>
                    <td><?php if ($member['is_self_managed'] == 0) {
                                echo "<form method=\"post\" action=\"/members/remove\" />
                                      <input type=\"hidden\" name=\"member_ID\" value=\"$member[member_ID]\" />
                                      <input class=\"btn btn-danger\" type=\"submit\" value=\"Remove From Group\" />
                                      </form>";
                              } else {
                                echo '';
                              } ?></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
  </div>
                    <p><a href="../dashboard/">&#60;&#60;&#32;Return to Group Dashboard</a></p>
</div>
<?php include('./view/footer.php'); ?>