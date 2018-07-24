<?php
//print_r($titantdrcalls);
foreach ($titantdrcalls as $call) {
    echo $call['unixtime'];
                   
}
<?php echo $this->table->generate($titantdrcalls); ?>

