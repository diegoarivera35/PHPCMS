<?php
    $connect = mysqli_connect('localhost', 'root', 'root', 'games_catalog');

    if(!$connect){
        die("Connection Failed: " . mysqli_connect_error());
    }
?>
