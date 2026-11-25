<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM nguoi_dung WHERE id = $id";
    $result = mysqli_query($conn,$sql);
    
?>