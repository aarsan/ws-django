<?php include('./view/header.php'); ?>
<div id="content">
  <div id="label">
  <h2>Notification Center</h2>
  </div>
			<table id="table-1">
			    <thead>
					<th style="font-size: 150%" >Inbound Alerts</th>
					<th style="font-size: 150%" >Count</th>
					<th></th>
				</thead>
				<tbody>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td style="font-size: 100%" >Payments which require your approval</td>
					<td style="font-size: 150%" ><?php echo $payment_approval_count; ?></td>
					<td><a class="btn" href="?action=view_pending_approvals">view</a></td>
				</tr>
				<tr>
					<td style="font-size: 100%" >Purchases which require your approval</td>
					<td style="font-size: 150%" ><?php echo $purchase_approval_count; ?></td>
					<td><a class="btn" href="?action=view_purchase_approvals">view</a></td>
				</tr>
				<tr>
					<td style="font-size: 100%" >Share changes which require your approval</td>
					<td style="font-size: 150%" ><?php echo $share_change_count; ?></td>
					<td><a class="btn" href="?action=view_share_changes">view</a></td>
				</tr>
				</tbody>
			</table>
				</br>
			<table id="table-1">
				<thead>
					<th style="font-size: 150%" >Outbound Alerts</th>
					<th style="font-size: 150%" >Count</th>
					<th></th>
				</thead>
				<tbody>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td style="font-size: 100%" >Payments you sent that still need approval</td>
					<td style="font-size: 150%" ><?php echo $sent_payment_approval_count; ?></td>
					<td><a class="btn" href="?action=view_sent_payment_approvals">view</a></td>
				</tr>
				<tr>
					<td style="font-size: 100%" >Purchases you made that still need approval</td>
					<td style="font-size: 150%" ><?php echo $sent_purchase_approval_count; ?></td>
					<td><a class="btn" href="?action=view_sent_purchase_approvals">view</a></td>
				</tr>
				<tr>
					<td style="font-size: 100%" >Shares you changed that still need approval</td>
					<td style="font-size: 150%" ><?php echo $sent_share_change_request_count; ?></td>
					<td><a class="btn" href="?action=view_sent_share_change_approvals">view</a></td>
				</tr>
				</tbody>
			</table>
	
    <p><a href="../dashboard/">&#60;&#60;&#32; Return to dashboard</a></p>
</div>
<?php include('./view/footer.php'); ?>