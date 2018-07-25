<!--Div container for table from CI -->
<div class="container" style="margin-top: 55px; ">
    <table  id="datatable1" class="table table-striped table-bordered">
        <thead> 
            <tr>
            <th>GMT</th>
            <th>Source</th>
            <th>Destination</th>
            <th>Porting Corrected</th>
            <th>Diversion</th>
            <th>CRE</th>
            <th>Peer</th>
            <th>Peer List</th>
            <th>Action</th>
            <th>Response</th>
            <th>Event</th>
            </tr>
        </thead>
        
        <tbody>
            <?php foreach ($titantdrcalls as $value): ?>
            <tr>
                    <td><?php echo $value['gmt_time']; ?></td>
                    <td><?php echo $value['cge164clean']; ?></td>
                    <td><?php echo $value['cde164clean']; ?></td>
                    <td><?php echo $value['cde164npcorrected']; ?></td>
                    <td><?php echo $value['diversionnum']; ?></td>
                    <td><?php echo $value['edge_server']; ?></td>
                    <td><?php echo $value['peer_name']; ?></td>
                    <td><?php echo $value['peer_list_name']; ?></td>
                    <td><?php echo $value['action']; ?></td>
                    <td><?php echo $value['response']; ?></td>
                    <td><?php echo $value['event_code']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div><!--table container -->