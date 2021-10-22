<?php 
    // require_once 'products.php';

    class Components extends Products{
        protected $component_name;
        protected $company;
        protected $component_type;

        public function __construct($_component_name, $_company, $_component_type) {
            $this->component_name = $_component_name;
            $this->company = $_company;
            $this->component_type = $_component_type;
        }

        public function setName($_component_name) {
            $this->component_name = $_component_name;
        }

        public function getName() {
            return $this->component_name;
        }

        public function setCompany($_company) {
            $this->company = $_company;
        }

        public function getCompany() {
            return $this->company;
        }

        public function setComponentType($_component_type) {
            $this->component_type = $_component_type;
        }

        public function getComponentType() {
            return $this->component_type;
        }
        
    }

    $pc_paolo= new Components('i7-11700k', 'Intel', 'Intel');
    var_dump($pc_paolo);
?>