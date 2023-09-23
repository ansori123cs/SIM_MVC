<?php
class Flasher{
    // method flash message dengan 2 parameter pesan =penggunaan aksi = parameter untuk aksi yang akan digunakan 
    public static function setFlash($pesan,$aksi,$tipe){
        $_SESSION['flash']=[
            'pesan' =>$pesan,
            'aksi'=>$aksi,
            'tipe'=>$tipe
        ];
    }
    public static function flash(){
        if (isset($_SESSION['flash'])) {
            echo '<div class="alert alert-' .$_SESSION['flash']['tipe']. ' alert-dismissible fade show" role="alert">Data Kaos Kaki
            <strong>' .$_SESSION['flash']['pesan']. '</strong> ' .$_SESSION['flash']['aksi']. '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        unset($_SESSION['flash']);
    }
}

?>