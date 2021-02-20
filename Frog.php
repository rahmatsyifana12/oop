<?php

    class Frog extends Animal{
        function __construct($name){
            $this->legs = 4;
            $this->name = $name;
        }

        function jump(){
            echo "hop hop<br>";
        }
    }

?>