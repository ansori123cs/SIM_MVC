<?php
class User_model extends Controller{
    private $nama='Ansori';
    public function getUser(){
        return $this->nama;
    }
}

?>