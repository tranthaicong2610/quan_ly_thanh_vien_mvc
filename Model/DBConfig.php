<?php
class Database {
    private $hostname ='localhost';
    private $username='root';
    private $pass='';
    private $dbname='quanlythanhvien_mvc';
    private $port ='3308';
    
    private $conn=NULL;
    private $result=null;
    public function connect()
    {
        $this->conn=new mysqli($this->hostname,$this->username,$this->pass, $this->dbname,$this->port);
        if($this->conn->connect_error)
        {
            echo "connect fail";
            exit();


        }
        else {
            mysqli_set_charset($this->conn,'utf8');
        }
        return $this->conn;

    }
    //thuc hien cau lenh truy van 

    public function execute($sql)
    {
        $this->result=$this->conn->query($sql);
        return $this->result;
    }

    // lay du lieu
    public function  getData()
    {
        if($this->result)
        {
            $data=mysqli_fetch_array($this->result);

        }
        else $data=0;
        return $data;

    }
    // lay du lieu
    public function  getDataID($table,$id)
    {
        $sql="select * from $table where id='$id'";
        $this->execute($sql);

        if($this->num_rows()!=0)
        {
            $data=mysqli_fetch_array($this->result);

        }
        else $data=0;
        return $data;

    }
    //lay toan bo du lieu

    public function getAllData($table)
    {
        $sql="select * from $table";
        $this->execute($sql);
        if($this->num_rows()==0)
        {
            $data='';
        }
        else 
        {
            while($datas=$this->getData())
            {
                $data[]=$datas;
            }
        }
        return $data;
    }

    //them du lieu
    public function add($name,$birthday,$quequan)
    {
        $sql="insert into thanhvien1(name,birthday,quequan) values('$name','$birthday','$quequan') ";
        return $this->execute($sql);

    }
//sua du lieu
    public function update($id,$name,$birthday,$quequan)
    {
        $sql="update thanhvien1 set name='$name',
        birthday='$birthday',
        quequan='$quequan'
        where id='$id'
        ";
        return $this->execute($sql);

    }
    //them du xoa
    public function delete($table,$id)
    {
        $sql="delete from $table where id='$id'";
        return $this->execute($sql);

    }
    //dem so ban ghi 
    public function num_rows()
    {
        if($this->result)
        {
            $num=mysqli_num_rows($this->result);
        }
        else 
        {
            $num=0;
        }
        return $num;
    }
    //tim kiem theo ten 
    public function findName($table,$name)
    {
        $sql = "select * from $table where name like '%$name%'";
        $this->execute($sql);
        if($this->num_rows()==0)
        {
            $data='';
        }
        else 
        {
            while($datas=$this->getData())
            {
                $data[]=$datas;
            }
        }
        return $data;
    }

}

?>