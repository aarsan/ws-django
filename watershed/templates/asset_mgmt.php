<?php include('../view/header.php'); ?>
<?php include '../view/groupnav.php'; ?>

<div id="content">
        <div id="label">
        <h1>Asset Management</h1>
        </div>
            <div id="assetmgmt_menu_buttons">
                <table>
                    <tr>
                        <td><form method="get" action="../assetmgmt/" />
                            <input type="hidden" name="action" value="view_shares" />
                            <input type="submit" value="Show Me What's Mine" />
                            </form></td>
                        <td><form method="get" action="../assetmgmt/" />
                            <input type="hidden" name="action" value="transfer_shares_form" />
                            <input type="submit" value="Sell Your Shares" />
                            </form></td>
                    </tr>
                </table>
                    <p><a href="../dashboard/">&#60;&#60;&#32;Return to Group Dashboard</a></p>

            </div>
</div>
<?php include('../view/footer.php'); ?>