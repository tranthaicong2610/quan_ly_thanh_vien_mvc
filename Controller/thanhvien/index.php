<?php
// include "Model/DBConfig.php";
if(isset($_GET['action']))
{
    $action=$_GET['action'];

}
else 
{
    $action='';
}
$thanhcong=array();
switch($action)
{
    case 'add':{
        if(isset($_POST['add_user']))
        {
            $name=$_POST['name'];
            $birthday=$_POST['birthday'];
            $quequan=$_POST['quequan'];
            
            if($db->add($name,$birthday,$quequan))
            {
                echo "<p>them thanh cong</p>";
            }
        }
        require_once('View/thanhvien/add_user.php');
        break;
    }
    case 'edit':{
        if(isset($_GET['id']))
        {
            $id=$_GET['id'];
            $tblTable='thanhvien1';
            $dataID=$db->getDataId($tblTable,$id);
            if(isset($_POST['edit_user']))
            {
                $name=$_POST['name'];
                $birthday=$_POST['birthday'];
                $quequan=$_POST['quequan'];
                
                if($db->update($id,$name,$birthday,$quequan))
                {
                    header("Location:index.php?controller=thanh-vien&action=list");
                }

            }
        }
        require_once('View/thanhvien/edit_user.php');
        break;
    }
    case 'delete':{
        if(isset($_GET['id']))
        {
            $id=$_GET['id'];
            $tblTable='thanhvien1';
            if($db->delete($tblTable,$id))
            {
                header('Location:index.php?controller=thanh-vien&action=list');
            }
        }
        else{
            header('Location:index.php?controller=thanh-vien&action=list');
        }
        break;
    }
    case 'list':{
        if(isset($_POST['name']))
        {
            $tblTable="thanhvien1";
            $data=$db->findName($tblTable);
        }
        else{
            $tblTable="thanhvien1";
            $data=$db->getAllData($tblTable);
        }
        
        require_once ('View/thanhvien/list.php');
        break;
    }
    default :
    {
        require_once('View/thanhvien/list.php');
        break;
    }
}
