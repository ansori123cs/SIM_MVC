<?php
class Kaoskaki extends Controller{

    public function index(){

        $data['judul']='Daftar Kaos Kaki';
        $data['kaos']= $this->model('Kaoskaki_model')->getAllKaoskaki();

        $this->view('headfoot/atas',$data);
        $this->view('headfoot/header');
        $this->view('kaoskaki/index',$data);
        $this->view('headfoot/bawah');
    }
}

?>