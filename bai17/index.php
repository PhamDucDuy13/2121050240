<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ul{
            list-style:none;
            display: flex;
            gap: 10px;
            background-color:blue;
            padding: 20px 0;
        }
        a{
            text-decoration : none;
            color : white;
        }
    </style>
</head>
<body>
    
    <?php
        session_start();
        if(isset($_SESSION['username'])){
            header("location: dangnhap.php");
            exit();
        }
        include 'connect.php';
    ?>
    <header>
        <nav>
            <ul>
                <a href="index.php?page_layout=trangchu"><li>Trang chu</li></a>
                <a href="index.php?page_layout=taikhoan"><li>tai khoan</li></a>
                <a href="index.php?page_layout=danhmuc"><li>danh muc</li></a>
                <a href="index.php?page_layout=phim"><li> phim</li></a>
            </ul>
        </nav>
    </header>
    <?php
        if(isset($_GET['page_layout'])){
            $page = $_GET['page_layout'];
            switch($page){
                case 'trangchu':
                    include 'trangchu.php';
                    break;
                case 'taikhoan':
                    include 'taikhoan.php';
                    break;
                
                case 'danhmuc':
                    include "danhmuc.php";
                    break;
                
                case 'phim':
                    include 'phim.php';
                    break;
                
                case 'themtaikhoan':
                    include 'themtaikhoan.php';
                    break;
                case 'capnhattaikhoan':
                    include 'capnhattaikhoan.php';
                    break;
                case 'xoataikhoan':
                    include 'xoataikhoan.php';
                    break;

                case 'themphim':
                    include 'themphim.php';
                    break;
                
                case 'xoaphim':
                    include 'xoaphim.php';
                    break;
                case 'capnhatphim':
                    include 'capnhatphim.php';
                    break;

                case 'themdanhmuc':
                    include 'themdanhmuc.php';
                    break;
                
                case 'capnhatdanhmuc':
                    include 'capnhatdanhmuc.php';
                    break;

                case 'xoadanhmuc':
                    include 'xoadanhmuc.php';
                    break;
            }
        }
    ?>

</body>
</html>