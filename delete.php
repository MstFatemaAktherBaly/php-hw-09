<?php
include "./database/env.php";
$id = $_REQUEST['id'];
$query = "DELETE FROM submission_forms WHERE id = $id";
$res = mysqli_query($conn,$query);

if($res){
    header("Location: ./allform.php");
}

?>