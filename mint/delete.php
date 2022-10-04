<?php 

include "db_conn.php";


if(isset($_REQUEST['delete'])){
    $id=$_REQUEST['id'];
    $sql="DELETE FROM mint where id=$id ";
    $result=mysqli_query($conn,$sql);

    $_SESSION['status'] = "data is deleted";
    header("location: a_news.php");
    exit();
}

?>