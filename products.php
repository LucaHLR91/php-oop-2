<?php 
    

    class Products extends Shop {
        private $products;
        public $pc_type;

        function __construct($_products, $_pc_type)
        {
            $this->products = $_products;
            $this->pc_type = $_pc_type;
        }

        public function setPcType($_pc_type) {
            $this->pc_type = $_pc_type;
        }

        public function getPcType() {
            return $this->pc_type;
        }
    }

    $product = new Products('PC Hardware', 'Desktop');
    var_dump($product); 
?>