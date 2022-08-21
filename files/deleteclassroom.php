<?php
/**
 * Created by PhpStorm.
 * User: Msamarth
 * Date: 30-01-2022
 * Time: 22:44
 */
include 'connection.php';
$id = $_GET['name'];
$q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
    "DELETE FROM classrooms WHERE name = '$id' ");
if ($q) {

    header("Location:addclassrooms.php");

} else {
    echo 'Error';
}
