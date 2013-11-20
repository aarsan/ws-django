<?php include('./view/header.php'); ?>
<?php include('./view/groupnav.php'); ?>

<div id="content">
    <div id="label">
    <h2>Approve or Deny the following share changes.</h2>
    </div>
    <table id="table-1">
      <thead>
        <th>Description</th>
        <th>Value</th>
        <th>Current investment amount</th>
        <th>Current % of ownership</th>
        <th>New investment amount</th>
        <th>New % of ownership</th>
        <th></th>
      </thead>
    <tbody>
    <?php foreach ($share_changes AS $changes) : ?>
    <tr>
      <td><?php echo $changes['asset_desc']; ?></td>
      <td>$<?php echo number_format($changes['asset_value'],2); ?></td>
      <td>$<?php echo number_format($changes['percent_owner_old'],2); ?></td>
      <td>~<?php echo number_format($changes['percent_owner_old'] / $changes['asset_value'] * 100,2); ?>%</td>
      <td>$<?php echo number_format($changes['percent_owner'],2); ?></td>
      <td>~<?php echo number_format($changes['percent_owner'] / $changes['asset_value'] * 100,2); ?>%</td>
      <td><form action="/pending/share-changes/<?php echo $changes['share_change_ID']; ?>/approve" method="post" >
          <input type="hidden" name="share_change_ID" value="<?php echo $changes['share_change_ID']; ?>" />
          <input class="btn" type="submit" name="accept" value="accept" />
          </form></td>
      <td><form action="/pending/share-changes/<?php echo $changes['share_change_ID']; ?>/deny" method="post" >
          <input class="btn" type="submit" name="deny" value="deny" />
          </form></td>
          
    </tr>
    <?php endforeach; ?>
    </tbody>
    </table>
    <p><a href="/dashboard/">&#60;&#60;&#32; Return to dashboard</a></p>
</div>

<?php include('./view/footer.php'); ?>