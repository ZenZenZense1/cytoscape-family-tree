<?php
    include('page/header.php');
    include('database/database_connection.php');

    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    
    $queryString = "INSERT INTO person (`first_name`, `last_name`) VALUES ('" . $first_name . "', '" . $last_name . "');";
    echo $queryString;
    if ($conn->query($queryString) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    include('page/footer.php');
?>