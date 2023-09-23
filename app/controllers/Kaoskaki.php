<?php
class Kaoskaki extends Controller{

    public function index(){

        $data['judul']='Daftar Kaos Kaki';
        $data['kaos']= $this->model('Kaoskaki_model')->getAllKaosKaki();

        $this->view('headfoot/atas',$data);
        $this->view('headfoot/header');
        $this->view('kaoskaki/index',$data);
        $this->view('headfoot/bawah');
    }
    public function detail($id){

        $data['judul']='Detail Kaos Kaki';
        $data['kaos']= $this->model('Kaoskaki_model')->getKaosKakiById($id);

        $this->view('headfoot/atas',$data);
        $this->view('headfoot/header');
        $this->view('kaoskaki/detail',$data);
        $this->view('headfoot/bawah');
    }
    public function tambah(){
        if ($this->model('Kaoskaki_model')->tambahDataKaosKaki($_POST)>0) {
            Flasher::setFlash('Berhasil','Ditambahkan','success');
            header('Location:'.BASEURL.'/kaoskaki');
            exit;
        }else{
            Flasher::setFlash('Gagal','Ditambahkan','danger');
            header('Location:'.BASEURL.'/kaoskaki');
            exit;
        }
    }
    public function hapus($id){
        if ($this->model('Kaoskaki_model')->hapusDataKaosKaki($id)>0) {
            Flasher::setFlash('Berhasil','Dihapus','success');
            header('Location:'.BASEURL.'/kaoskaki');
            exit;
        }else{
            Flasher::setFlash('Gagal','Dihapus','danger');
            header('Location:'.BASEURL.'/kaoskaki');
            exit;
        }
    }

}

?>