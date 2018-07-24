<!--Div container for table from CI -->

<div class="container" style="margin-top: 20px; ">
    <table  id="datatable1" class="table table-striped table-bordered">
        <thead> 
            <tr>
            <th>Epoch</th><th>Type</th><th>Edge</th><th>Call ID</th><th>GMT</th><th>SRC</th><th>E164 SRC</th><th>Dest</th>
            <th>E164 Dest</th><th>Porting Corrected</th><th>SRC IP</th><th>SRC Port</th><th>Destination</th><th>Diversion</th><th>Peer</th>
            <th>Peer List</th><th>Origin CC</th><th>Destination CC</th><th>NNID</th><th>Message</th><th>Action</th><th>Response</th>
            <th>Event</th><th>Circuit Switched Sub</th><th>ENUM Referral</th><th>LIR Referral</th><th>ENUM Response</th>
        </thead>

        <tbody>
            <?php foreach ($titantdrcalls as $titantdrcall) { ?>
                <tr>
                    <td><?php echo $book->book_id; ?></td>
                    <td><?php echo $book->book_isbn; ?></td>
                    <td><?php echo $book->book_title; ?></td>
                    <td><?php echo $book->book_author; ?></td>
                    <td><?php echo $book->book_category; ?></td>
                    <td>
                        <button class="btn btn-warning" onclick="edit_book(<?php echo $book->book_id; ?>)"><i class="glyphicon glyphicon-pencil"></i></button>
                        <button class="btn btn-danger" onclick="delete_book(<?php echo $book->book_id; ?>)"><i class="glyphicon glyphicon-remove"></i></button>


                    </td>
                </tr>
            <?php } ?>



        </tbody>

    </table>
</div><!--table container -->