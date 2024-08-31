<?php
     $con = new mysqli('localhost','root','','hms_db_777');
    //  if( $con ){
    //     echo "Connection established";
    //  }
    if( !$con ){
        die(mysqli_error($con));
    }
?>