<?php
	$con = new mysqli('localhost', 'admincatekids', '$123Redprueb4$', 'CateKids');
	$con->set_charset("utf8mb4");
	if(!$con){
		die("ERROR: Couldn't connect to database");
    }else{
        echo "";
    }
?>

