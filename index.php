<?php
include 'rectangle-class.php';
$ractangle = new Rectangle(10,5);
echo 'Chu vi hinh chu nhat la: '.$ractangle->getPerimeter().'<br>';
echo 'Dien tich hinh chu nhat la: '.$ractangle->getArea().'<br>';
echo 'Ve hinh chu nhat: '.'<br>';
echo $ractangle->render();
