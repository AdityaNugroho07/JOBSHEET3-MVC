<?php

class MahasiswaController{
    public function index(){
        require_once "Model/MahasiswaModel.php";
        $model = new MahasiswaModel();
        $data = $model->getAllMahasiswa();
        require_once "View/Mahasiswa.php";
    }

    public function show($id){
        require_once "Model/MahasiswaModel.php";
        $model = new MahasiswaModel();
        $data = $model->getMahasiswaById($id);
        require_once "View/Mahasiswa_detail.php";
    }
}