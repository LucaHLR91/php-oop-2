<?php 
    class Shop {
        private $shop_name;
        private $shop_address;

        function __construct($_shop_name, $_shop_address)
        {
            $this->shop_name = $_shop_name;
            $this->shop_address = $_shop_address; 
        }
    }

    $hardware_shop = new Shop('GK-Shop', 'Via delle Mole - Roma');
    var_dump( $hardware_shop);

?>