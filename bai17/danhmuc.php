
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
            color:red;
        }

    </style>
</head>
<body>

    <h1>Danh Muc</h1>
    <a class="btn" href="index.php?page_layout=themdanhmuc">Them Danh Muc</a>

    <?php
        include 'connect.php';
        $sql = "select * from theloai";
        $result = mysqli_query($conn,$sql);
    ?>

    <table>
        <tr>
            <th>id</th>
            <th>ten the loai</th>
            <th>thao tac</th>
        </tr>

        <?php
            while($row = mysqli_fetch_assoc($result))
            {
        ?>

        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['tentheloai'] ?></td>

            <td>
                <a class="capnhat" href="index.php?page_layout=capnhatdanhmuc&id=<?php echo $row['id']; ?>">Cap nhat</a>

                <a class="xoa" href="index.php?page_layout=xoadanhmuc&id=<?php echo $row['id']; ?>">Xoa</a>
            </td>
        </tr>

        <?php
            }
        ?>
    </table>
</body>
</html>
