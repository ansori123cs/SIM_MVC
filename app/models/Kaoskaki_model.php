<?php
class Kaoskaki_model{
    // private $mhs=[
    //     [
    //         "nama"=>"Ansori",
    //         "npm"=>"00972",
    //         "email"=>"ansori@gmail.com",
    //         "jurusan"=>"Sistem Informasi"
    //     ],
    //     [
    //         "nama"=>"paong",
    //         "npm"=>"00973",
    //         "email"=>"paong@gmail.com",
    //         "jurusan"=>"Teknik Informatika"
    //     ],
    //     [
    //         "nama"=>"pikipik",
    //         "npm"=>"00974",
    //         "email"=>"pikipik@gmail.com",
    //         "jurusan"=>"Teknik Mesin"
    //     ]
    // ];

    private $dbh; //database handler
    private $stmt; //statement query

    public function __construct() {
        $dsn='mysql:host=localhost;dbname=phpmvc';
       try {
        $this->dbh=new PDO($dsn ,'root','');
       }catch(PDOException $e){
        die($e->getMessage());
       }
    }
    public function getAllkaoskaki(){
        $this->stmt=$this->dbh->prepare('SELECT*FROM kaoskaki');
        $this->stmt->execute();

        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>