<?php
// Create connection
        $con=mysqli_connect("localhost","root","root","santandervarejoweb");

// Check connection
        if (mysqli_connect_errno($con))
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }    

    $sql = "TRUNCATE TABLE ofertavarejo";
    mysqli_query($con, $sql);
$import_status = '?import_status=del';
header("Location: index.php".$import_status);
?>