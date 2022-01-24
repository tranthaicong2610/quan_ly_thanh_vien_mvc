<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>

    <div class="danhsach">
        <form action="" method="post">
        <div class="box">
            <div class="container-1">
                <input type="search" id="search" placeholder="Search..."name='search' />
                <input type="button" value="Search">
            </div>
        </div>
        </form>
        <table border="1">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>name</th>
                    <th>birthday</th>
                    <th>que quan </th>
                    <th>hanh dong</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $stt=1;
                foreach($data as $item){
                ?>
                <tr>
                <td><?php echo $stt; ?></td>
                <td><?php echo $item['name']; ?></td>
                <td><?php echo $item['birthday']; ?></td>
                <td><?php echo $item['quequan']; ?></td>
                <td>
                    <a onclick="return confirm('Bạn có chắc muốn sua không?');"href="index.php?controller=thanh-vien&action=edit&id=<?php echo $item['id'] ;?>">Edit</a>
                    <a onclick="return confirm('Bạn có chắc muốn xóa không?');" href="index.php?controller=thanh-vien&action=delete&id=<?php echo $item['id']; ?>" >Delete</a>
                </td>
                </tr>
                <?php
                 $stt++;
                }
                 ?>
            </tbody>
        </table>
    </div>
</body>
</html>