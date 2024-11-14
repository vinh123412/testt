<?php
require 'class.php';

class Student extends Person {
    private $studentID;

    public function __construct($name, $age, $studentID) {
        parent::__construct($name, $age); // Gọi constructor của lớp cha (People)
        $this->studentID = $studentID;
    }

    // Thêm phương thức riêng cho Student
   public function test() {
        parent::test();
    }
    
    public function point() {
    $name = array("Vinh", "Diep", "Hieu", "Anh", "Hung");
    $point = array("1", "5", "6.5", "10", "8.5");

    foreach ($name as $index => $names) {
        echo $names . " được: " . $point[$index] . "\n";
    }
}

    
}
