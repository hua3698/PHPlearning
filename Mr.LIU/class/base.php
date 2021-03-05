<?php

//可以連線資料庫
//可以指定要操作的資料表
//可以從資料表撈資料

class DB{
    private $dsn="mysql:host=localhost;dbname=invoice;charset=utf8";
    private $pdo;
    private $table;
    
    public function __construct($table){
        $this->table=$table;
        $this->pdo=new PDO($this->dsn,'root','');

    }

    public function find($id){
        $sql="select * from $this->table where ";
        if(is_array($id)){
            foreach($id as $key => $value){
                $tmp[]=sprintf("`%s`='%s'",$key,$value);
                //$tmp[]="`".$key."`='".$value."'";
            }
            $sql=$sql.implode(' && ',$tmp);
        }else{
            $sql=$sql . " id='$id' ";
        }
        $row=$this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
        //mysqli_fetch_assoc()
    
        return $row;
    }
    
    public function all(...$arg){
        $sql="select * from $this->table ";

        if(isset($arg[0])){
            if(is_array($arg[0])){
                foreach($arg[0] as $key => $value){
                    $tmp[]=sprintf("`%s`='%s'",$key,$value);
                }

                $sql=$sql. " where " . implode(" && ",$tmp);
            }else{
                $sql=$sql.$arg[0];
            }
        }
        if(isset($arg[1])){
            $sql=$sql.$arg[1];
        }
        //echo $sql;
        return $this->pdo->query($sql)->fetchAll();

    }
    public function count(...$arg){
        $sql="select count(*) from $this->table ";

        if(isset($arg[0])){
            if(is_array($arg[0])){
                foreach($arg[0] as $key => $value){
                    $tmp[]=sprintf("`%s`='%s'",$key,$value);
                }

                $sql=$sql. " where " . implode(" && ",$tmp);
            }else{
                $sql=$sql.$arg[0];
            }
        }
        if(isset($arg[1])){
            $sql=$sql.$arg[1];
        }
        //echo $sql;
        return $this->pdo->query($sql)->fetchColumn();

    }

    public function del($id){
        $sql="delete from $this->table where ";
        if(is_array($id)){
            foreach($id as $key => $value){
                $tmp[]=sprintf("`%s`='%s'",$key,$value);
                //$tmp[]="`".$key."`='".$value."'";
            }
            $sql=$sql.implode(' && ',$tmp);
        }else{
            $sql=$sql . " id='$id' ";
        }
           return  $this->pdo->exec($sql);
    }

    public function save($arr){
        if(isset($arr['id'])){
            //update update $this->table set ``='',``='' where `id`='$arr['id]'
            foreach($arr as $key => $value){
                $tmp[]=sprintf("`%s`='%s'",$key,$value);
            }
            $sql="update $this->table set ".implode(",",$tmp)." where `id`='{$arr['id']}'";

        }else{
            //insert
            $sql="insert into $this->table (`".implode("`,`",array_keys($arr))."`) values('".implode("','",$arr)."')";
        }
        return $this->pdo->exec($sql);
    }

    public function q($sql){
        return $this->pdo->query($sql)->fetchAll();
    }
}


function to($url){
    header("location:".$url);
}
$inv=new DB('invoices');

/* $data=[
    'code'=>"BB",
    'period'=>1,
    'payment'=>'30',
    'number'=>'00334455',
    'date'=>'2020-12-04'
];

$inv->save($data); */

//$row=$inv->find(10002);
//$row['code']='AA';
//$inv->save($row);
//echo $inv->count(['period'=>5]);
//
//$rows=$inv->all(['period'=>5]);
//echo count($rows);

//save('invoices',$data);


?>

