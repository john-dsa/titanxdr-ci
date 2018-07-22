<!doctype html>
<html>
    <head>
        <title><?php echo $title;?></title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <style type="text/css">
            #draggable {
                background: orange;
                width: 100px;
                height: 100px;
            }
        </style>

        <script type='text/javascript'>
            $(function () {
                $("#draggable").draggable().resizable();
            });
        </script>
    </head>

    
    <body>
        <!--Div to test if jq has loaded properly. remove bfore production. -->
        <div id='draggable'>drag!
        </div>

        <!--Div container for table from CI -->
        <div>
            <?php
            $this->table->set_heading('unixtime', 'type', 'edge_server', 'call_id', 'gmt_time', 'cge164', 'cge164clean', 'cde164', 'cde164clean', 'cde164npcorrected', 'sourceip', 'sourceport', 'destinationdn', 'diversionnum', 'peer_name', 'peer_list_name', 'origcc', 'destcc', 'nnid', 'message', 'action', 'response', 'event_code', 'circuit_switched_subscriber', 'enum_referralrequired', 'lir_referral_required', 'enum_response_code');
            ?>            
        </div>

    </body>

</html>


