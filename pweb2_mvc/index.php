<?php
require_once "Controller/MahasiswaController.php";
require_once "Controller/ProgramStudiController.php";

$app = new MahasiswaController();
$app->index();
