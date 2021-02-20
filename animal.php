<?php

    class Animal{
        public $name;
        public $legs = 2;
        public $cold_blooded = false;

        function __construct($name){
            $this->name = $name;
        }
    }

?>