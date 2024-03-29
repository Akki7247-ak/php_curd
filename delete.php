<?php 
include 'config.php';
if(isset($_GET['id'])){
    $u_id = $_GET['id'];

    $sql = "DELETE FROM crud WHERE id ='$u_id'";
    $result = $conn->query($sql);

    if($result == true){
        echo "<script>alert('data successfully deleted')</script>";
        header('Location: read.php');
    }else{
        echo "Error :" . $sql . "<br>" . $conn->error;
    }
}