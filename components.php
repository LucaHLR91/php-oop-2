<?php 
    require_once 'products.php';
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

    $intel_cpus = [
        new Components('i7-11700k', 'Intel', 'CPU'),
        new Components('i5-11600k', 'Intel', 'CPU'),
        new Components('i3-10100k', 'Intel', 'CPU'),
    ];

    $amd_cpus = [
        new Components('Ryzen-7 5700x', 'AMD', 'CPU'),
        new Components('Ryzen-5 5600x', 'AMD', 'CPU'),
        new Components('Ryzen-3 3300x', 'AMD', 'CPU'),
    ];
    var_dump($intel_cpus);
    var_dump($amd_cpus);
?>