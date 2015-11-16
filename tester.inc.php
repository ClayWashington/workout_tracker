<?php

    require('Helper.php');

    $generic = new Helper();
    $generic_middle = new Helper('Clay', 'Washington');
    $man = new Helper('Clay', 'Joseph', 'Washington');


    $generic->write_name();
    $generic_middle->write_name();
    $man->write_name();

?>