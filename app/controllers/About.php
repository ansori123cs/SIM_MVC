<?php
class About extends Controller{
    public function index($nama='nama',$pekerjaan='pekerjaan',$umur=0){
        $data['nama']=$nama;
        $data['pekerjaan']=$pekerjaan;
        $data['umur']=$umur;
        $data['judul']=' About/index';
        
        $this->view('headfoot/atas',$data);
        $this->view('headfoot/header');
        $this->view('about/index',$data);
        $this->view('headfoot/bawah');
    }
    public function page(){
        $data['judul']=' About/page';
        $this->view('headfoot/header');
        $this->view('headfoot/atas',$data);
        $this->view('about/page');
        $this->view('headfoot/bawah');
    }
}

?>