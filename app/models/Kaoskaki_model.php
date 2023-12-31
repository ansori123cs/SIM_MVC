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
        $this->db->query('SELECT * FROM kaoskaki WHERE id_kaos=:id' );
        $this->db->bind('id',$id);
        return $this->db->single();
    }
    public function tambahDataKaosKaki($data){
        $query="INSERT INTO kaoskaki 
            VALUES
            (null,:nama,:mesin,:bahan,:keterangan)
        ";
        $this->db->query($query);
        $this->db->bind('nama',$data['nama']);
        $this->db->bind('mesin',$data['mesin']);
        $this->db->bind('bahan',$data['bahan']);
        $this->db->bind('keterangan',$data['keterangan']);
        $this->db->execute();
        // pengembalian nilai untuk inisialisasi statement pada controller
        return $this->db->rowCount();
    }
    public function hapusDataKaosKaki($id){
        $query="DELETE FROM kaoskaki WHERE id_kaos = :id";
        $this->db->query($query);
        $this->db->bind('id',$id);
        $this->db->execute();
        // pengembalian nilai untuk inisialisasi statement pada controller
        return $this->db->rowCount();
    }
    public function ubahDataKaosKaki($data){
        $query=" UPDATE kaoskaki SET
            nama=:nama,
            mesin=:mesin,
            bahan=:bahan,
            keterangan=:keterangan,
            WHERE id_kaos=:id
        ";
        $this->db->query($query);
        $this->db->bind('nama',$data['nama']);
        $this->db->bind('mesin',$data['mesin']);
        $this->db->bind('bahan',$data['bahan']);
        $this->db->bind('keterangan',$data['keterangan']);
        $this->db->bind('id',$data['id']);
        $this->db->execute();
        // pengembalian nilai untuk inisialisasi statement pada controller
        return $this->db->rowCount();
    }
    public function searchKaosKaki(){
        $keyword=$_POST['keyword'];
        $query="SELECT * FROM kaoskaki WHERE nama LIKE :keyword";

        $this->db->query($query);
        $this->db->bind('keyword',"%$keyword%");
        return $this->db->resultSet();


    }
}

?>