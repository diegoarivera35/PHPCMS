<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Grades</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    </head>
    <body>
        <?php include('reusables/nav.php') ?>
        <form action="includes/addGame.php" method="POST" style="padding: 50px;">
            <div class="row">
                <div class="col">
                    <h2 class="anta-regular">Add Game</h2>
                    <div class="mb-3">
                        <label for="gname" class="form-label">Game Name</label>
                        <input type="text" class="form-control" id="gname" name="gname" aria-describedby="Game name">
                    </div>
                    <div class="mb-3">
                        <label for="rdate" class="form-label">Release Date</label>
                        <input type="date" class="form-control" id="rdate" name="rdate" aria-describedby="Release Date">
                    </div>
                    <div class="mb-3">
                        <label for="genre" class="form-label">Genre</label>
                        <select class="form-select" id="genre" name="genre">
                            <option value="#" selected disabled>---Select Genre---</option>
                            <option value="action-adventure">Action-Adventure</option>
                            <option value="horror">Horror</option>
                            <option value="action-rpg">Action-RPG</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="dname" class="form-label">Developer</label>
                        <select class="form-select" id="dname" name="dname">
                            <option value="#" selected disabled>---Select Developer---</option>
                            <?php
                                include('reusables/connect.php');
                                $query = "SELECT * FROM developers;";
                                $developerResult=mysqli_query($connect, $query);
                                
                                if($developerResult->num_rows > 0){
                                    foreach($developerResult as $row){
                                        echo '<option value="'.$row["developer_id"].'">'.$row["developer_name"].'</option>';
                                    }
                                }
                            ?>
                        </select>
                    </div>  
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" id="description" name="description" aria-describedby="description">
                    </div>
                    <div>
                        <button type="submit" name="addGames" class="btn btn-primary" >Add Game</button>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>