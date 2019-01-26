<?php

require_once '../vendor/autoload.php';

$foto_original = 'mifoto.jpg';
$guardar_en = 'fotomodificada.jpg';

$thumb = new PHPThumb\GD($foto_original);

// Redimenzionar
$thumb->resize(250,250);

// Recortar
// $thumb->crop(10, 10, 120, 120);
$thumb->cropFromCenter(250);

$thumb->show();
$thumb->save($guardar_en);