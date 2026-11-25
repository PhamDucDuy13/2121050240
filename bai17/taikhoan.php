<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width: 100%;
            margin: 20px 0;
        }
        tr,th,td {
            border : 1px solid black;
            
        }
        .btn{
            background-color :blue;
            padding: 10px;
            border-radius :10px;
        }
        .capnhat{
            color:green;
        }
        .xoa{
            color:red
        }
        

    </style>
</head>
<body>

    <h1>Tai Khoan</h1>
    <a class="btn" href="index.php?page_layout=themtaikhoan">Them Tai Khoan</a>
    <?php
        include 'connect.php';
        $sql = "select* from  nguoi_dung";
        $result = mysqli_query($conn,$sql);
    ?>
    <table>
        <tr>
            <th>id</th>
            <th>ten dang nhap</th>
            <th>email</th>
            <th>ho ten</th>
            <th>ngay sinh</th>
            <th>So dien Thoai</th>
            <th>gioi tinh</th>
            <th>thao tac</th>
        </tr>
        <?php
            while($row = mysqli_fetch_assoc($result))
                {

                
        ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['ten_dang_nhap'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['ho_ten'] ?></td>
            <td><?php echo $row['ngay_sinh'] ?></td>
            <td><?php echo $row['so_dien_thoai'] ?></td>
            <td><?php echo $row['gioi_tinh']==true?"Nam":"Nu" ?></td>

            <td>
                <a class="capnhat" href="index.php?page_layout=capnhattaikhoan&id=<?php echo $row['id']; ?>">Cap nhat</a>
                <a class="xoa" href="index.php?page_layout=xoataikhoan&id=<?php echo $row['id']; ?>" >Xoa</a>
            </td>
        </tr>
        <?php
                } 
        ?>
    </table>
</body>
</html>