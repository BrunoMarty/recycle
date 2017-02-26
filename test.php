<?php
    $host_name  = "db670837151.db.1and1.com";
    $database   = "db670837151";
    $user_name  = "dbo670837151";
    $password   = "corentin32";


    $connect = mysqli_connect($host_name, $user_name, $password, $database);
    
    if(mysqli_connect_errno())
    {
    echo '<p>Verbindung zum MySQL Server fehlgeschlagen: '.mysqli_connect_error().'</p>';
    }
    else
    {
    echo '<p>Ok</p>';
    }
?>