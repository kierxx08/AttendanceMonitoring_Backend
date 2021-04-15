<?php
require "assets/remotesql.php";



    $query = mysqli_query($conn,"SELECT * FROM `zsample` LIMIT 0, 5");

    //create an array
    $emparray = array();
    $myObj = new \stdClass();
    while($row =mysqli_fetch_assoc($query))
    {
        $myObj->user = $row['user'];
        $myObj->number = $row['number'];
        $myObj->url = "http://sample.com";
        echo $row['user'];
        $emparray[] = $myObj;
    }
    echo json_encode($emparray);
    


?>