<?php 
    require_once 'shop.php';
    require_once 'discount.php';
    class User  extends Shop {
        use Discount;

        protected $name;
        protected $surname;
        protected $email;
        protected $phone_number;

        public function __construct($_name, $_surname, $_email, $_phone_number)
        {
            $this->name = $_name;
            $this->surname = $_surname;
            $this->email = $_email;
            $this->phone_number = $_phone_number;
        }

        public function setName($_name) {
            $this->name = $_name;
        }

        public function setSurname($_surname) {
            $this->surname = $_surname;
        }

        public function setEmail($_email) {
            $this->email = $_email;
        }

        public function setPhoneNumber($_phone_number) {
            $this->phone_number = $_phone_number;
        }

        public function getName() {
            return $this->name;
        }

        public function getSurname() {
            return $this->surname;
        }

        public function getEmail() {
            return $this->email;
        }

        public function getPhoneNumber() {
            return $this->phone_number;
        }

    }

    $users = [
        new User('Paolo', 'Rossi', 'paolo@gmail.com', '345-6789331'),
        new User('Marco', 'Bianchi', 'marco@gmail.com', '338-6129213')
    ];

    // $users[0]->setName('caro');
    // echo $users[0]->getName();
    
    var_dump($users);
    // $users[0]->setUserType('premium');
    // echo $users[0]->getUserType();
?>