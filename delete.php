<?php
include("login_connection.php");
$id = $_GET['id'];
$sql = "delete from tblproduct where id=".$id;
$result = $con->query($sql);

if (!$result) {
    die("Error Add Data");
}
header('location: http://localhost/datamanagement/data.php');


?>