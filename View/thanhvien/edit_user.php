<?php
    require 'Controller/thanhvien/index.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sua thanh vien </title>
</head>
<body>
    <div class="dangkythanhvien">
        <a href="index.php?controller=thanh-vien&action=list" class='list'>Danh sach</a>
        <h3>cap nhat thanh vien moi</h3>
        <form action="" method="post">
        <table>
            <tr>
                <td>name :</td>
                <td><input type="text" name="name" id="" placeholder="ten thanh vien" value="<?php echo $dataID['name']?>"></td>
            </tr>
            <tr>
                <td>birthday :</td>
                <td><input type="text" name="birthday" id="" placeholder="birthday"value="<?php echo $dataID['birthday']?>"></td>
            </tr>
            <tr>
                <td>que quan :</td>
                <td><input type="text" name="quequan" id="" placeholder="que quan"value="<?php echo $dataID['quequan']?>"></td>
            </tr>
            <tr>
                <td>&nbsp; :</td>
                <td><input type="submit" name="edit_user" id="" placeholder="cap nhat"></td>
            </tr>
        </table>
        </form>
        
    </div>
</body>
</html>