<?php
// Định nghĩa lớp
class Person {
    // Thuộc tính (biến thành viên)
    protected $name;
    protected $age;

    // Phương thức khởi tạo (constructor)
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    // Getter và Setter cho thuộc tính name
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    // Phương thức interview
    public function interview() {
        $i = 0;
        do {
            echo "Tôi tên là Vinh, học Bách Khoa\n";
            $i++;
        } while ($i < 10);
    }

    // Phương thức protected test
    protected function test() {
        $i = 0;
        while ($i < 10) {
            echo "test\n";
            $i++;
        }
    }

    // Phương thức introduce để hiển thị thông tin
    public function introduce() {
        for ($i = 0; $i < 10; $i++) {
            echo "Xin chào, tôi là $this->name và tôi $this->age tuổi.\n";
        }
    }
}
?>

