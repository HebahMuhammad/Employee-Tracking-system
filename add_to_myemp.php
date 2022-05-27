<?php
session_start();
error_reporting(0);
require_once 'process/dbh.php';
$id = $_GET['id'];
$userid = 1;

//checking
$select = mysqli_query($conn, "SELECT * FROM employer_employees WHERE employer_id ='$userid' and employee_id='$id'");
if(!mysqli_num_rows($select)) {
    $sql = "INSERT INTO employer_employees (employer_id,employee_id) VALUES ($userid, '$id')";
    
}else{
    header("Location: my_employees.php");
}



    


