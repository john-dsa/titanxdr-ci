<!--Div container for table from CI -->
<div class="table-container">
    <h3 align="center"><?php echo $title ?></h3><br/>
    <?php
    $this->table->set_heading('unixtime', 'type', 'edge_server', 'call_id', 'gmt_time', 'cge164', 'cge164clean', 'cde164', 'cde164clean', 'cde164npcorrected', 'sourceip', 'sourceport', 'destinationdn', 'diversionnum', 'peer_name', 'peer_list_name', 'origcc', 'destcc', 'nnid', 'message', 'action', 'response', 'event_code', 'circuit_switched_subscriber', 'enum_referralrequired', 'lir_referral_required', 'enum_response_code');
    echo $titantdrcalls;
    ?>

</div><!--table container -->
        


