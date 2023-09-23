<?php
class Kaoskaki_model{
    private $tabel='kaoskaki';
    private $db;
    public function __construct() {
        $this->db=new Database;
    }
    public function getAllKaosKaki(){
        $this->db->query("SELECT * FROM ".$this->tabel);
        return $this->db->resultSet();
    }
    public function getKaosKakiById($id){
        $this->db->query('SELECT * FROM ' .$this->tabel.' WHERE id_kaos=:id' );
        $this->db->bind('id',$id);
        return $this->db->single();
    }
}

?>