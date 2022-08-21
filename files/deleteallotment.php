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
    "UPDATE subjects  SET isAlloted = '0' , allotedto = '',allotedto2 = '',allotedto3 = '' WHERE subject_code = '$id' ");
if ($q) {

    header("Location:allotsubjects.php");

} else {
    echo 'Error';
}
