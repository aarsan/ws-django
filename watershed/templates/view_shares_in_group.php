<?php include('./view/header.php'); ?>
<?php include('./view/groupnav.php'); ?>

<div id="content">
  <div id="label">
  <h2><?php echo $_SESSION['nick_name']; ?>'s shares in <?php echo $group_name; ?></h2>
  <p><a href=".?page=<?php echo $arr['previous']; ?>">&#60;&#60;&#32; previous</a>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $arr['info']; ?>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href=".?page=<?php echo $arr['next']; ?>">next >></a></p>
  </div>
    <table id="table-1">
        <thead>
            <th style="font-size: 150%" >Asset Description</th>
            <th style="font-size: 150%" >Asset Value</th>
            <th style="font-size: 150%" >Your Investment</th>
            <th style="font-size: 150%" >Your % of ownership</th>
        </thead>
        <tbody>
        <?php foreach ($shares as $share) : ?>
        <tr>
            <td style="font-size: 100%" ><?php echo $share->getAssetDesc(); ?></td>
            <td style="font-size: 100%" >$<?php echo number_format($share->getAssetValue(),2); ?></td>
            <td style="font-size: 100%" >$<?php echo number_format($share->getPercentOwner(),2); ?></td>
            <td style="font-size: 100%" >~<?php echo number_format($share->getPercentOwner() / $share->getAssetValue() * 100,2); ?>%</td>
			<td style="font-size: 100%" ><a href="/assets/modify/<?php echo $share->getAssetID(); ?>"><i class="icon-pencil"></i>&nbsp;modify</a></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <p><a href="/dashboard/">&#60;&#60;&#32; Return to dashboard</a></p>
</div>
<?php include('./view/footer.php'); ?>