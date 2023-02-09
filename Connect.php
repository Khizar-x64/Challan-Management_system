<?php
$con =new mysqli('localhost','root','','CHALLANAPP');
 
    if(!$con) { 
        die(mysqli_error($con)); 
    }
    ?>