<?php
    $servername = "localhost";
    $username="root";
    $password="";
    $dbname="Fashion";
    $conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
}

    $name="";
    $email="";
    $message="";
    
    if ( isset($_POST['name'])) {
         $name = $_POST['name'];
    }
    if ( isset($_POST['email'])) {
         $email = $_POST['email'];
    }
    if ( isset($_POST['message'])) {
         $message = $_POST['message'];
    }


    $sql = "INSERT INTO Messages (name, email, message) VALUES ('".$name."', '".$email."','".$message."')";
    
    if ($conn->query($sql) === TRUE) {

    }
    else {
        die("Error updating record: " .$conn->error);
    }

    mysqli_close($conn);

?>