<?php
class Database{
    private $db_name=DB_NAME;
    private $db_user=DB_USER;
    private $db_pass=DB_PASS;
    private $db_host=DB_HOST;
    private $dbh; //database handler
    private $stmt; //statement quer

    // method construct dan inisialisasi PDO untuk Database sistem
    public function __construct() {
        $dsn='mysql:host='.$this->db_host.';dbname='.$this->db_name;

    $option=[
        PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION
    ];
       try {
        $this->dbh=new PDO($dsn ,$this->db_user,$this->db_pass,$option);
       }catch(PDOException $e){
        die($e->getMessage());
       }
    }
    //method persiapan query yang akan digunakan untuk pengenalan untuk mencegah sql injection
    public function query($query){
        $this->stmt=$this->dbh->prepare($query);
    }
    // method pengenalan untuk mencegah sql injection
    public function bind($param,$value,$type=null){
        if(is_null($type)){
            switch(true){
                case is_int($value):
                    $type=PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type=PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type=PDO::PARAM_NULL;
                    break;
                default:
                    $type=PDO::PARAM_STR;
            }
            $this->stmt->bindValue($param,$value,$type);
        }
    }
    // method eksekusi sql yang sudah di bind
    public function execute(){
        $this->stmt->execute();
    }
    //method eksekusi nilai jamak/banyak    
    public function resultSet(){
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    //method eksekusi nilai tunggal
    public function single(){
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);

    }
    // method pengembalian nilai untuk inisialisasi statement pada controller
    public function rowCount(){
        return $this->stmt->rowCount();
    }
    
}

?>