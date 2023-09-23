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
    public function tambahDataKaosKaki($data){
        $query="INSERT INTO kaoskaki 
            VALUES
            ('',:nama,:mesin,:bahan,:keterangan)
        ";
        $this->db->query($query);
        $this->db->bind('nama',$data['nama']);
        $this->db->bind('nama',$data['mesin']);
        $this->db->bind('nama',$data['bahan']);
        $this->db->bind('nama',$data['keterangan']);
        $this->db->execute();
        // pengembalian nilai untuk inisialisasi statement pada controller
        return $this->db->rowCount();

    }
}

?>