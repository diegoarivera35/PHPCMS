<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Games Catalog</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    </head>
    <body>
        <?php include('reusables/nav.php') ?>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="display-5 mt-4 m-4 anta-regular">Games</h3>
                </div>
            </div>
            <?php
                include('reusables/connect.php');
                $query='SELECT games.id, games.name, games.genre, games.release_date, games.description, developers.developer_name
                FROM games
                JOIN developers ON games.developer_id = developers.developer_id';
                $games=mysqli_query($connect, $query);
                if(mysqli_connect_error()){
                    die("Connection error: ". mysqli_connect_error());
                }
            ?>
            <div class="container">
                <div class="row">
                    <?php
                    foreach($games as $game){
                        echo'<div class="col-md-4">
                            <div class="card m-3" style="width: 20rem;">
                        <div class="card-body" style="background-color: #3498db; color: #fff;">
                            <div class="card-item">
                                <h5 class="card-title micro-5-regular">'.$game['name'].'</h5>
                            </div>
                            <div class="card-item anta-regular">
                                <strong>Release Date: </strong>'.$game['release_date'].' 
                            </div>
                            <div class="card-item anta-regular">
                            <strong>Genre: </strong>'.$game['genre'].'
                            </div>
                            <div class="card-item anta-regular">
                            <strong>Description: </strong>'.$game['description'].'
                            </div>
                            <div class="card-item anta-regular">
                            <strong>Developer: </strong>'.$game['developer_name'].'
                            </div>
                        </div>
                        <form method="GET" action="includes/deleteGame.php" style="background-color: #3498db; color: #fff;">
                            <input type="hidden" name="id" value="'.$game['id'].'">
                        <button style="margin: 0 0 10px 10px" type="submit" name="delete" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                        </div>
                        </div>';
                        }                
                    ?>
                </div>
                </div>
            </div>
        </div>
    </body>
</html>