<?php 
session_start(); 

include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        header("Location: index.php?error=User Name is required");
        exit();
    }
    else if(empty($pass)){
        header("Location: index.php?error=Password is required");
        exit();
    }
}
$sql = "INSERT INTO id_table (username, password)
VALUES ('$uname','$pass')";

if (mysqli_query($conn, $sql)) {
  echo "Register successfully";
  header("Location: home.php");
  header("Location: index.php?error=Registered successfully, login with credentials");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

