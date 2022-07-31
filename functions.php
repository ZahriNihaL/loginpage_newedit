<?php

include("../includes/db.php");
session_start();


if(isset($_POST['logout'])){

  unset($_SESSION['loggedin']);
  header('Location:login.php');

}


if(isset($_POST['login'])){

    $uname = $_POST['username'];
    $password = $_POST['password'];

    $sql = "select * from tbl_users where username='".$uname."' AND password='".$password."'";
    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result)==1){
        $_SESSION["loggedin"] = true;
        header("Location:../index.html");
    }
    else{
      header("Location:../login.php?error=Invalid Credential!");   
    }
}



?>