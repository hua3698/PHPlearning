<?php

//可以連線資料庫
//可以指定要操作的資料表
//可以從資料表撈資料

class DB{

    private $dsn="mysql:host=localhost;dbname=invoice;charset=utf8";
    private $pdo;
    public $table;

    public function __construct($table){
        $this->table=$table;
        $this->pdo=new PDO($this->dsn,'root','');
    }
    
    public function find($id){
        $sql = "select * from $this->table where ";
        if (is_array($id)) {
            foreach ($id as $key => $value) {
                $tmp[] = sprintf("`%s`='%s'", $key, $value);
            }
            $sql = $sql . implode("&&", $tmp);
        } else {
            $sql = $sql . "id='$id'";
        }
        $row = $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    
        return $row;
    }


    public function all(...$arg){
        $sql = "select * from $this->table ";
    
        if (isset($arg[0])) {
            if (is_array($arg[0])) {
                foreach ($arg[0] as $key => $value) {
                    $tmp[] = sprintf("`%s`='%s'", $key, $value);
                }
                $sql = $sql . " where " . implode(" && ", $tmp);
            } else {
                $sql = $sql . $arg[0];
            }
        } else {
            $sql = $sql;
        }
    
        if (isset($arg[1])) {
            $sql = $sql . $arg[1];
        }
        return $this->pdo->query($sql)->fetchAll();
    }


    public function del($id){
        $sql = "delete from $this->table where ";
    
        if (is_array($id)) {
            //製作會在where後面的句子 -> where ` `=' ';
            foreach ($id as $key => $value) {
                $tmp[] = sprintf("`%s`='%s'", $key, $value);
            }
            $sql = $sql . implode("&&", $tmp);
        } else {
            $sql = $sql . "id='$id'";
        }
    
        return $this->pdo->exec($sql);
    }
    

    public function save($array){
        if(isset($array['id'])){
            //update $this->table set...
            foreach($array as $key => $value){
                $tmp[]=sprintf("`%s`='%s'",$key,$value);
            }
            $sql=" update $this->table set ".implode(",",$tmp)." where `id`='{$array['id']}'" ;

        }else{
            //insert
            $sql="insert into $this->table(`".implode("`,`",array_keys($array))."`) values('".implode("','",$array)."')";
        }

        return $this->pdo->exec($sql);
    }

    public function q($sql){
        return $this->pdo->query($sql)->fetchAll();
    }

}

$inv=new DB('invoices');

$inv->q("award_number");

?>

<pre>
<?php
    // echo $inv->$sql;
    print_r($inv->all(['period'=>6]," limit 2"));?>
</pre>
