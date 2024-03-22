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
                    <h3 class="display-5 mt-4 m-4 anta-regular">Developers</h3>
                </div>
            </div>
            <?php
                include('reusables/connect.php');
                $query='SELECT developer_name from developers';
                $developers=mysqli_query($connect, $query);
                if(mysqli_connect_error()){
                    die("Connection error: ". mysqli_connect_error());
                }
            ?>
            <div class="container">
                <div class="row">
                    <?php
                    foreach($developers as $developer){
                        echo'<div class="col-md-4">
                            <div class="card m-3" style="width: 20rem;">
                        <div class="card-body">
                            <div class="card-item">
                                <a style="text-decoration:none" href="">' . $developer['developer_name'] . '</a>
                            </div>
                        </div>
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