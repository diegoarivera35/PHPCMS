<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nav</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Anta&family=Micro+5&display=swap" rel="stylesheet">
        <style>
            .micro-5-regular {
                font-family: "Micro 5", sans-serif;
                font-weight: 400;
                font-style: normal;
                font-size: 30px;
                }
                .anta-regular {
                font-family: "Anta", sans-serif;
                font-weight: 400;
                font-style: normal;
                }
        </style>
  </head>
  <body>
    <nav style="background-color: #3498db; color: #fff;" class="navbar navbar-expand-lg anta-regular">
      <div class="container">
        <a class="navbar-brand" href="#">Games Catalog</a>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="games.php">Games</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="developers.php">Developers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="addGame.php">Add Game</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </body>
</html>
