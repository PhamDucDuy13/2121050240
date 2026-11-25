<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .khoi1{
            border:1px solid black;
            border-radius :10px;
            width:400px;
            margin :20px auto;
            background-color: lightblue;
        }
        input{
            padding: 5px 0;
            margin: 10px 0;

        }
        form{
            padding: 10px;
            margin-left: 100px;

        }
        h1{
            padding: 2px 0;
            margin-left: 120px;
        }
        button{
            padding: 10px 20px;
            margin-left: 120px;
            width: 130px;
            height: auto;
        }
       
    </style>
</head>
<body>
    <div class="khoi1">
        <div style="width:80%; margin:auto;text-align:center" class=""></div>
        <h1>Dang nhap</h1>
        
        <div class="">
            <form action="dangnhap.php" method="POST">
                <p><b>ten dang nhap</b></p>
                <input type="text" name="userName" id="">
                <p><b>Mat Khau</b></p>
                <input type="password" name="password" id="">

                <div>
                    <button type="submit">Dang nhap</button>
                </div>
            </form>
           
        </div>
    </div>
    <?php
    //su dung include de ket not 2 file vs nhau

        include'connect.php';
        session_start();
       if(isset($_POST['userName']) && isset($_POST['password'])){
            $userName = $_POST['userName'];
            $password = $_POST['password'];
            $sql ="SELECT * FROM `nguoi_dung` WHERE  ten_dang_nhap ='$userName' and mat_khau ='$password'";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) >0){
                
                $_SESSION['userName'] ="thanh cong";
                header("Location: index.php");
                exit;
            }
            else{
                echo"ten dang nhap ko chinh xac";
            }
       }
    ?>
</body>
</html>