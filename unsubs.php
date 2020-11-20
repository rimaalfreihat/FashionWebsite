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
    
    if ( isset($_POST['name'])) {
         $name = $_POST['name'];
    }
    if ( isset($_POST['email'])) {
         $email = $_POST['email'];
    }


    $sql = "DELETE FROM Subscriptions WHERE email='".$email."' ";
    if ($conn->query($sql) === TRUE) {

    }
    else {
        die("Error updating record: " .$conn->error);
    }

    mysqli_close($conn);

?>