<?php include('./view/header.php'); ?>
<?php include('./view/groupnav.php'); ?>

<div id="content">
        <h2><?php echo $log_owner; ?>'s History Log</h2>
        <p><a href=".?page=<?php echo $arr['previous']; ?>">&#60;&#60;&#32; previous</a>&nbsp;&nbsp;&nbsp;&nbsp;
           <?php echo $arr['info']; ?>&nbsp;&nbsp;&nbsp;&nbsp;<a href="./?page=<?php echo $arr['next']; ?>">next >></a></p>
          <div id="trans_log">
          <table id="table-1">
              <thead>
                <th style="font-size: 150%" >Date</th>
                <th style="font-size: 150%" >Description</th>
                <th style="font-size: 150%" >Credit / Debit</th>
                <th style="font-size: 150%" >Balance</th>
              </thead>
              <tbody>
              <?php foreach ($raw_log as $record) { 
                $payee_amount = $record->getPayeeAmount();
                $payer_amount = $record->getPayerAmount();
                $asset_desc = $record->getAssetDesc();
                $asset_cost = $record->getAssetCost();
                $cur_invest = $record->getCurInvest();
                $old_invest = $record->getOldInvest();
                $date = $record->getDate();
                $cred_deb = $record->getCredDeb();
                $balance = $record->getBalance();
                
               if($record->getTransType() == 1) {
                  $org_to_member_ID = $record->getPayee();
                  $member_nick = get_member_nick($org_to_member_ID); //fix
                  $subject = 'You';
                  $verb = 'paid';
                  $object = "<strong>$member_nick</strong> $$payee_amount";

               } elseif($record->getTransType() == 2) {
                  $org_to_member_ID = $record->getPayer();
                  $member_nick = get_member_nick($org_to_member_ID); //fix
                  $subject = $member_nick;
                  $verb = 'paid';
                  $object = "you $$payer_amount";

               } elseif($record->getTransType() == 3) {
                  $percent = number_format(($record->getCurInvest() / $record->getAssetCost() * 100),2);
                  $subject = 'You';
                  $verb = 'purchased';
                  $object = "<strong>$asset_desc</strong> for $$asset_cost. Your share: $$cur_invest (~$percent%)";

               } elseif($record->getTransType() == 4) {
                  $percent = number_format(($record->getCurInvest() / $record->getAssetCost() * 100),2);
                  $org_to_member_ID = $record->getPurchaser();
                  $member_nick = get_member_nick($org_to_member_ID); //fix
                  $subject = $member_nick;
                  $verb = 'purchased';
                  $object = "<strong>$asset_desc</strong> for $$asset_cost. Your share: $$cur_invest (~$percent%)";

               } elseif($record->getTransType() == 5) {
                  $old_percent = number_format(($record->getOldInvest() / $record->getAssetCost() * 100),2);
                  $cur_percent = number_format(($record->getCurInvest() / $record->getAssetCost() * 100),2);
                  $subject = "Your share of <strong>$asset_desc</strong> ($$asset_cost)";
                  $verb = 'changed';
                  $object = "from $$old_invest (~$old_percent%) to $$cur_invest (~$cur_percent%)";
                  
               } else {
                  $subject = 'You';
                  $verb = 'joined';
                  $object = "group: <strong>$group_name</strong>";

               }

               echo "<tr>";
               echo "<td style=\"font-size: 100%\" >$date</td>";
               echo "<td style=\"font-size: 100%\" >$subject $verb $object</td>";
               echo "<td style=\"font-size: 100%\" >$$cred_deb</td>";
               echo "<td style=\"font-size: 100%\" >$$balance</td>";
               echo "</tr>";

                }?>

              </tbody>
            </table>
          </div>
         
            
    <p><a href="/dashboard/">&#60;&#60;&#32; Return to dashboard</a></p>
</div>

<?php include('./view/footer.php'); ?>