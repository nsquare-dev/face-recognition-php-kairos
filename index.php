<?php

include "FaceDetector.php";

$detector = new svay\FaceDetector('detection.dat');
$detector->faceDetect('group.jpg');
$detector->toJpeg();
//$detector->toJson();
