<?php

class ProgramStudiController{
    public function index(){
        require_once "Model/ProgramStudiModel.php";
        $model = new ProgramStudiModel();
        $data = $model->getAllProgramStudi();
        require_once "View/ProgramStudiView.php";
    }
}