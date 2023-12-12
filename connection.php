<?php

    $conn = new mysqli('localhost','root', '', 'crudoperations');

    if(!$conn){
        die(mysqli_error($conn));
    }
    // else{
    //     echo "db is connected! <br>";
    // }
?>