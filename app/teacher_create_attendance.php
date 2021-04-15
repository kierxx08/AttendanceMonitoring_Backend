<?php
require "assets/remotesql.php";

if(isset($_POST["start_timestamp"]) && isset($_POST["end_timestamp"]) && isset($_POST["class_id"]) && isset($_POST["account_id"]) && isset($_POST["device_id"])){
    $start_timestamp = $_POST["start_timestamp"];
    $end_timestamp = $_POST["end_timestamp"];
    $class_id = $_POST["class_id"];
    $account_id = $_POST["account_id"];
    $device_id = $_POST["device_id"];
    


}
?>