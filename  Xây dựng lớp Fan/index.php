<?php
include_once "Fan.php";

$fan1 = new Fan();
$fan1->getSEEP($fan1->getFAST());
$fan1->setRadius(10);
$fan1->setColor("yellow");
$fan1->setOn(true);

$fan2= new Fan();
$fan2->getSEEP($fan2->getMEDIUM());
$fan2->setRadius(5);
$fan2->setColor("blue");
$fan2->setOn(false);

echo $fan1->toString();
echo "<br>";
echo $fan2->toString();


?>
