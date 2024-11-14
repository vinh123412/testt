<?php

// File index.php

// Gọi file class.php
require 'class2.php';

// Tạo đối tượng từ class Person
/*
$person = new Person("Vinh", 21);
$person->introduce();

$person->setName("Minh");
echo $person->getName();
*/

$person = new Person("Vinh", 21);
$person->introduce();

$student = new Student("Vinh", 21,20214146);
$student->introduce();
$student->test();
$student->point();
$student->interview();


?>

