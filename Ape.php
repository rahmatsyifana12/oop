<?php

    class Ape extends Animal{
        function __construct($name){
            $this->name = $name;
        }

        function yell(){
            echo "Auooo<br>";
        }
    }

?>