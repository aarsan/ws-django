    <div style="height: 360px; width: 800px; overflow: scroll;" id="groups">
            <table id="table-1">
                <thead>
                    <th style="font-size: 150%" >Group Name</th>
                    <th style="font-size: 150%" >Description</th>
                    <th style="font-size: 150%" >Balance</th>
                    <th style="font-size: 150%" >Notifications</th>
                    <th></th>
                    <th></th>
                </thead>
                <tbody>
            <?php foreach ($membergroups as $group) : ?>
                    <tr>
                        <td style="font-size: 120%" ><a href="/members/groups/<?php echo $group->getOrgID(); ?>"><?php echo $group->getOrgName(); ?></a></td>
                        <td style="font-size: 120%" ><?php echo $group->getOrgHood(); ?></td>
                        <td style="font-size: 120%" >$<?php echo $group->getBalance(); ?></td>
                        <td style="font-size: 120%" ><?php echo $group->getNotifications(); ?></td>
                        <td style="font-size: 120%" ><a href="/groups/leave/<?php echo $group->getOrgID(); ?>"><i class="icon-trash"></i>&nbsp;leave group</a></td>
                          
                    </tr>
                </tbody>
            <?php endforeach; ?>
            </table>
    </div>