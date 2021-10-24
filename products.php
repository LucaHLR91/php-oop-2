<?php 
    require_once 'shop.php';
    class Products extends Shop{
        protected $products_name;
        protected $company;
        protected $products_type;

        public function __construct($_products_name, $_company, $_products_type) {
            $this->products_name = $_products_name;
            $this->company = $_company;
            $this->product_type = $_products_type;
        }

        public function setName($_products_name) {
            $this->products_name = $_products_name;
        }

        public function getName() {
            return $this->products_name;
        }

        public function setCompany($_company) {
            $this->company = $_company;
        }

        public function getCompany() {
            return $this->company;
        }

        public function setProductsType($_products_type) {
            $this->products_type = $_products_type;
        }

        public function getProductsType() {
            return $this->products_type;
        }
        
    }

    $intel_cpus = [
        new Products('i7-11700k', 'Intel', 'CPU'),
        new Products('i5-11600k', 'Intel', 'CPU'),
        new Products('i3-10100k', 'Intel', 'CPU'),
    ];

    $amd_cpus = [
        new Products('Ryzen-7 5700x', 'AMD', 'CPU'),
        new Products('Ryzen-5 5600x', 'AMD', 'CPU'),
        new Products('Ryzen-3 3300x', 'AMD', 'CPU'),
    ];
    var_dump($intel_cpus);
    var_dump($amd_cpus);
?>