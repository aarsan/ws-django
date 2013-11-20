<?php include('./view/header.php'); ?>
<?php include('./view/groupnav.php'); ?>

<div id="content">
        <div id="label">
        <h2>You just recorded the following purchase:</h2>
        </div>
            <table id="table-1">
              <thead>
                <th>Asset description</th>
                <th>Asset Cost</th>
              </thead>
              <tbody>
                <tr>
                  <td><?php echo $asset_desc; ?></td>
                  <td>$<?php echo $asset_cost; ?></td>
                </tr>
               </tbody>
            </table>
    <p>Check the box next to the members which this expense will be shared with and enter the amount they are responsible for.</p>
    <form method="post" action="/assets/new/" >
      <input type="hidden" name="action" value="add_shares" />
            <table id="table-1">
              <thead>
                <th></th>
                <th>Group Member</th>
                <th>Amount Responsible for</th>
              </thead>
              <tbody>
              <?php foreach ($members as $members) : ?>
                <tr>
                  <td><input type="checkbox" name="member_ID[]" onclick="document.getElementById('thebox').disabled=(this.checked)?0:1" value="<?php echo $members['member_ID']; ?>" /></td>
                  <td><?php echo $members['nick_name']; ?></td>
                  <td>$<input type="text" id="thebox" name="percent_owner_<?php echo $members['member_ID']; ?>" value="0" size="3" /></td>
                </tr>
              <?php endforeach; ?>
              </tbody>
            </table>
        <input type="submit" value="Click to distribute shares" />
    </form>
</div>

<?php include('./view/footer.php'); ?>