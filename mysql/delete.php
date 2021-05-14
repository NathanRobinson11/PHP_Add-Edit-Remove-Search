<?php

$con=mysqli_connect("localhost", "root", "", "liverpool");
if(isset($_GET['delete'])){
    $delete=$_GET['delete'];

    $query="DELETE FROM players WHERE id=$delete";
    $del=$con->query($query);
    if($del){
        header('location:mysql.php');
    }else{
        echo "Something went wrong";
    }
}
?>