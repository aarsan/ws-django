<?php include('./view/header.php'); ?>

<div id="content">
    <div id="label">
    <h2>Record a Purchase</h2>
    </div>
    <div id="purchase_form">
    <form action="/assets/new/" method="post" id="add_asset_form" class="aligned">
    <input type="hidden" name="action" value="add_asset" />
        
        <label>Who made the purchase?</label>
            <select name="purchaser_member_ID">
                <option value="<?php echo $member_ID; ?>"><?php echo $nick_name; ?>&nbsp;(you)</option>
                <?php foreach ($managed_members as $member) : ?>                  
                <option value="<?php echo $member['member_ID']; ?>">
                <?php echo $member['nick_name']; ?>
                </option>
                <?php endforeach; ?>
            </select>
        <br />
        <br />
        <br />

        <label><strong>Purchase type:</strong></label><br><br>
        <input type="radio" name="asset_type_ID" value="1" />Tracked in inventory. (furniture, appliances, etc)<br>
        <br />
        <input type="radio" name="asset_type_ID" value="2" />Not tracked. (food, soap, services)<br>
        <br />
        <br />    

        <label>Asset Description:</label>
        <input type="text" name="asset_desc" style="margin-left: 1px;" />
        <br />
        <br />

        <label>Asset Cost:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="text" name="asset_cost" />
        <br />

        <label>&nbsp;</label>
        <input type="submit" value="Record Purchase" />
        <br />

    </form>
            			<p><a href="../dashboard/">&#60;&#60;&#32;Return to Group Dashboard</a></p>

    </div>

</div>

<?php include('./view/footer.php'); ?>