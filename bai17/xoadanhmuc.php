<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM theloai WHERE id = $id";
    $result = mysqli_query($conn,$sql);
    
?>