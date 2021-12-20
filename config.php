<?php
    $conn = mysqli_connect('localhost', 'root', '', 'btl');
    if(!$conn){
        die("<script>alert('Kết nối thất bại!')</script>");
    }
?>