

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .khoi{
            border: 1px solid black;
            border-radius: 10px;
            width: 250px;
            margin: 20vh auto;
            background-color: antiquewhite;
        }
        .i-text input{
            padding: 5px 0;
            margin: 10px 0;
            width: 100%;
        }
        button{
            padding: 5px 0;
            width: 100%;
        }
        form{
            padding: 10px;
        }
        h1{
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <h1>Thêm danh mục</h1>

    <form class="khoi" action="index.php?page_layout=themdanhmuc" method="POST">
        <div class="i-text">
            <input type="text" name="tentheloai" id="" placeholder="Tên thể loại">
        </div>

        <button>Thêm danh mục</button>
    </form>
    
<?php
    if(isset($_POST['tentheloai']))
    {
        $tentheloai = $_POST['tentheloai'];

        if(!empty($tentheloai))
        {
            // Người dùng nhập đủ thông tin
            $sql = "INSERT INTO `theloai`(`tentheloai`) VALUES ('$tentheloai')";

            $result = mysqli_query($conn,$sql);

            if($result){
                header("Location:index.php?page_layout=danhmuc");
                exit;
            }
            else {
                echo "Them danh muc that bai";
            }
        }
        else{
            // Người dùng nhập thiếu thông tin
            echo "<p style='color: red'>Vui lòng nhập đầy đủ thông tin</p>";
        }
    }
?>
</body>
</html>
