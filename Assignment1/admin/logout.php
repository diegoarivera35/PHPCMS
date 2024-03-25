<?php
  include("../reusables/config.php");
  session_destroy();

  header('Location: ../games.php');