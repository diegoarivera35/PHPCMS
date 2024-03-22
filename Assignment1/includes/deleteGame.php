<?php
    if (isset($_GET['delete']))
    {
        $id = $_GET['id'];

        include('../reusables/connect.php');
        $query = "DELETE FROM games where `id` = '$id'";
        $games = mysqli_query($connect, $query);
        if ($games){
            header("Location: ../games.php");
        }else{
            echo "Failed: " . mysqli_connect_error($connect);
        }
    }
    else{
        echo "You should not be here!!";
    }
 
?>