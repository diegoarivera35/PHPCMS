<?php
var_dump($_POST);
if(isset($_POST['updateGame'])){
  print_r($_POST);
  $id = $_POST['id'];
  $name = $_POST['gname'];
  $date = $_POST['rdate'];
  $genre = $_POST['genre'];
  $devid = $_POST['dname'];
  $desc = $_POST['description'];
  $boxart = $_POST['boxart'];


  include('../reusables/connect.php');
  $query = "UPDATE games SET name = '$name', release_date = '$date', genre = '$genre', developer_id = '$devid', description = '$desc', boxart = '$boxart' WHERE id = '$id'";

  $game = mysqli_query($connect, $query);

  if($game){
    header("Location: ../games.php");
  } else {
    echo "Failed: " . mysqli_error($connect);
  } 
} else {
  echo "<h1>Access Denied</h1>";
}