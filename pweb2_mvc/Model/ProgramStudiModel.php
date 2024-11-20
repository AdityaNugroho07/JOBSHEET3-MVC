<?php

class Database{

    public $koneksi;

    public function __construct(){
        $this->koneksi = mysqli_connect("localhost","root","","universitas");
    }
    
}

class ProgramStudiModel extends Database{
    public function getAllProgramStudi(){
        $query = "SELECT * FROM program_studi";
        return mysqli_query($this->koneksi, $query);
    }
    
   
    
}