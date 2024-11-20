<?php

class Database{

    public $koneksi;

    public function __construct(){
        $this->koneksi = mysqli_connect("localhost","root","","universitas");
    }
    
}

class MahasiswaModel extends Database{
    public function getAllMahasiswa(){
        $query = "SELECT * FROM mahasiswa";
        return mysqli_query($this->koneksi, $query);
    }
    
    public function getMahasiswaById($id){
        $query = "SELECT * FROM mahasiswa WHERE id = '$id'";
        return mysqli_query($this->koneksi, $query);
    }
}