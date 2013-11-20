<?php include('./view/header.php'); ?>

<div id="content">
  <div id="label">
  <h2>Modify member investment for the following asset: <?php echo $asset_desc; ?> (value: $<?php echo $asset_cost; ?>)</h2>
  </div>
<h4>New investment amounts must total the asset value</h4>
<form action="/assets/update/" method="post" >
  <input type="hidden" name="action" value="update_shares" />
  <input type="hidden" name="asset_ID" value="<?php echo $asset_ID; ?>" />
  <table id="table-1">
    <thead>
        <th style="font-size: 150%" >Nick Name</th>
        <th style="font-size: 150%" >Current investment amount</th>
        <th style="font-size: 150%" >Current % of ownership</th>
        <th style="font-size: 150%" >New investment amount</th>
        <th></th>
    </thead>
    <tbody>
    <?php foreach ($shares_for_asset AS $shares) : ?>
    <tr>
      <td style="font-size: 100%" ><?php echo $shares['nick_name']; ?></td>
      <td style="font-size: 100%" >$<?php echo number_format($shares['percent_owner'],2); ?></td>
      <td style="font-size: 100%" >~<?php echo number_format($shares['percent_owner'] / $asset_cost * 100,2) ?>%</td>
      <td style="font-size: 100%" >Enter new amount: $<input type="text" name="percent_owner_<?php echo $shares['member_ID']; ?>" value="" size="3" </td>
    </tr>
    <?php endforeach; ?>
    <?php foreach ($nosharemembers AS $members) : ?>
    <tr>
        <td style="font-size: 100%" ><?php echo $members['nick_name']; ?></td>
        <td style="font-size: 100%" >$0.00</td>
        <td style="font-size: 100%" >~0.00%</td>
        <td style="font-size: 100%" >Enter new amount: $<input type="text" name="percent_owner_<?php echo $members['member_ID']; ?>" value="" size="3"></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
   </table>
   </br>
   <input class="btn" type="submit" value="Update Shares" />
</form>
    <p><a href="/assets/<?php echo $member_ID; ?>">&#60;&#60;&#32;Back</a></p>
</div>
<?php include('./view/footer.php'); ?>