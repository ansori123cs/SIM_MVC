<?php
class Home extends Controller{
    public function index(){

        $data['judul']='Home/index';
        $data['nama']= $this->model('User_model')->getUser();

        $this->view('headfoot/atas',$data);
        $this->view('headfoot/header');
        $this->view('home/index',$data);
        $this->view('headfoot/bawah');
    }
}

?>