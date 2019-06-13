<?php
  require_once ("model/Chat_model.php");
  $Chat_model = new Chat_model();

  if(!isset($_SESSION["userSession"])) {
    // Login  
    if(isset($_POST["login"])){
        $user = htmlentities(addslashes( $_POST["user"]));
        session_start();
        $_SESSION["userSession"] = $_POST["user"];
        header("location: view/users_zone.php");
    } else {
        header("location: view/login.php");
    }
  }

  /// Close
  if(isset($_POST["close"])) {
    session_start();
    session_destroy();
  } 

/// insertChat  
  if(isset($_POST["add_message"])) {
    $username = $_POST["username"];
    $message = $_POST["message"];
    if($Chat_model->insertChat($username, $message) != 0) {
      header("location: view/users_zone.php");
    }
  }
?>