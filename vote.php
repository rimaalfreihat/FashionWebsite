<?php
    $servername = "localhost";
    $username="root";
    $password="";
    $dbname="Fashion";
    $conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
}

    $vote="";

    if ( isset($_POST['vote'])) {
         if ($_POST['vote'] == '1') {
                $vote = '1';
          }else if ($_POST['vote'] == '2') {
                $vote = '2';
          }else if ($_POST['vote'] == '3') {
                $vote = '3';
          }
        else echo("alert('No selection')");
        
        echo("alert('$vote')");
    }
    else
        echo("alert('no data')");


    $sql = "UPDATE Votes SET Votes=(votes+1) WHERE ID='".$vote."'";
    if ($conn->query($sql) === TRUE) {

    }
    else {
        die("Error updating record: " .$conn->error);
    }

mysqli_close($conn);

?>