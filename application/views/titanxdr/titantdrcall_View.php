<!--Div container for table from CI -->
<div class="container" style="margin-top: 20px; ">
    <table  id="datatable1" class="table table-striped table-bordered">
        <thead> 
            <tr>
            <th>Epoch</th><th>Type</th><th>Edge</th><th>Call ID</th><th>GMT</th><th>SRC</th><th>E164 SRC</th><th>Dest</th>
            <th>E164 Dest</th><th>Porting Corrected</th><th>SRC IP</th><th>SRC Port</th><th>Destination</th><th>Diversion</th><th>Peer</th>
            <th>Peer List</th><th>Origin CC</th><th>Destination CC</th><th>NNID</th><th>Message</th><th>Action</th><th>Response</th>
            <th>Event</th><th>Circuit Switched Sub</th><th>ENUM Referral</th><th>LIR Referral</th><th>ENUM Response</th>
            </tr>
        </thead>
        
        <tbody>
            <?php foreach ($titantdrcalls as $value): ?>
                <tr>
                    <td><?php echo $value['unixtime']; ?></td>
                    <td><?php echo $value['type']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div><!--table container -->