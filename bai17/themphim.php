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
    <h1>Thêm phim</h1>

    <form class="khoi" action="index.php?page_layout=themphim" method="POST">
        <div class="i-text">
            <input type="text" name="ten_phim" id="" placeholder="Tên phim">
        </div>

        <div class="i-text">
            <input type="text" name="quoc_gia" id="" placeholder="Quốc gia">
        </div>

        <div class="i-text">
            <input type="number" name="dao_dien_id" id="" placeholder="ID đạo diễn">
        </div>

        <div class="i-text">
            <input type="datetime-local" name="nam" id="">
        </div>

        <div class="i-text">
            <input type="number" name="do_tuoi" id="" placeholder="Độ tuổi">
        </div>

        <div class="i-text">
            <input type="text" name="mota" id="" placeholder="Mô tả">
        </div>

        <button>Thêm phim</button>
    </form>

<?php
    if(isset($_POST['ten_phim']) && 
       isset($_POST['quoc_gia']) && 
       isset($_POST['dao_dien_id']) && 
       isset($_POST['nam']) &&
       isset($_POST['do_tuoi']) &&
       isset($_POST['mota']))
    {
        $ten_phim = $_POST['ten_phim'];
        $quoc_gia = $_POST['quoc_gia'];
        $dao_dien_id = $_POST['dao_dien_id'];
        $nam = str_replace('T', ' ', $_POST['nam']) . ':00';
        $do_tuoi = $_POST['do_tuoi'];
        $mota = $_POST['mota'];

        if(!empty($ten_phim) && 
           !empty($quoc_gia) && 
           !empty($dao_dien_id) && 
           !empty($nam) &&
           !empty($do_tuoi) &&
           !empty($mota))
        {
            
            $sql = "INSERT INTO `phim`(`ten_phim`, `quoc_gia`, `dao_dien_id`, `nam`, `do_tuoi`, `mota`) 
            VALUES ('$ten_phim','$quoc_gia','$dao_dien_id','$nam','$do_tuoi','$mota')";

            $result = mysqli_query($conn,$sql);

            if($result){
                header("Location:index.php?page_layout=phim");
                exit;
            }
            else {
                echo "Them phim that bai";
            }
        }
        else{
            
            echo "<p style='color: red'>Vui lòng nhập đầy đủ thông tin</p>";
        }
    }
?>
</body>
</html>