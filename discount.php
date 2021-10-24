<?php 
    trait Discount {
        protected $discount = 0;
        protected $user_type;
        
        public function setUserType($_user_type) {
            $this->user_type = $_user_type;
        }
    };

    
?>