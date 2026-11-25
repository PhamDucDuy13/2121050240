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
            mb
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
    <a class="btn" href="index.php?page_layout=themphim">Them Phim</a>
    <?php
        include 'connect.php';
        $sql = "select* from  phim";
        $result = mysqli_query($conn,$sql);
    ?>
    <table>
        <tr>
            <th>id</th>
            <th>ten phim</th>
            <th>quoc gia</th>
            <th>id dao dien/th>
            <th>nam</th>
            <th>Do tuoi</th>
            <th>Mo ta</th>
            <th>thao tac</th>
        </tr>
        <?php
            while($row = mysqli_fetch_assoc($result))
                {

                
        ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['ten_phim'] ?></td>
            <td><?php echo $row['quoc_gia'] ?></td>
            <td><?php echo $row['dao_dien_id'] ?></td>
            <td><?php echo $row['nam'] ?></td>
            <td><?php echo $row['do_tuoi'] ?></td>
            <td><?php echo $row['mota'] ?></td>

            <td>
                <a class="capnhat" href="index.php?page_layout=capnhatphim&id=<?php echo $row['id']; ?>">Cap nhat</a>
                <a class="xoa" href="index.php?page_layout=xoaphim&id=<?php echo $row['id']; ?>" >Xoa</a>
            </td>
        </tr>
        <?php
                } 
        ?>
    </table>
</body>
</html>