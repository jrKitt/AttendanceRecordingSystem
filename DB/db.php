<?php 

    //logDataBase
        $dbhost = 'localhost';
        $dbroot = 'root';
        $dbpass = 'kittichai';
        $dbname = 'logs_it_network';

        $db = mysqli_connect($dbhost, $dbroot, $dbpass, $dbname)or die(mysqli_connect_error());



?>