<?php

    $id = $_GET["id"];

    // echo $id;
    
    // include("db.php");
    //     $sqlentreperson = "SELECT * FROM person";
    //     $resultentreperson = mysqli_query($con,$sqlentreperson);
    //     $echoentre = array();
    // while($row = mysqli_fetch_array($resultentreperson)){
    //     $entreperson = array (array(
    //    $row['id_number']
    //     ));
    //    array_push($echoentre,$entreperson);
    // }
    // echo $echoentre;

    $user = array();
    $user['name'] = "Jade";
    $user['id'] = $id;

        echo json_encode($user);
  
  ?>