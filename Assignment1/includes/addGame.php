<?php
    if (isset($_POST['addGames']))
    {
        $gname = $_POST['gname'];
        $release_date = $_POST['rdate'];
        $genre = $_POST['genre'];
        $did = $_POST['dname'];
        $description = $_POST['description'];
        $boxart = $_POST['boxart'];

        include('../reusables/connect.php');
        $query = "INSERT INTO games (name, release_date, genre, developer_id, description, boxart) VALUES ('$gname', '$release_date', '$genre', '$did', '$description', '$boxart')";
        $games = mysqli_query($connect, $query);
        if ($games){
            header("Location: ../games.php");
        }else{
            echo "Failed: " . mysqli_error($connect);
        }
    }
    else{
        echo "You should not be here!!";
    }
    
?>