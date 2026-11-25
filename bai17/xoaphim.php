<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM phim WHERE id = $id";
    $result = mysqli_query($conn,$sql);
    
?>