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
            header('Location'.BASEURL.'/kaoskaki');
            exit;
        }
    }
}

?>