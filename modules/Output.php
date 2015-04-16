<?php
return function(...$args) {
    return new class {

        public function __construct($a = "a",$b = "b"){
            echo "A : " . $a;
            echo "B : " .$b;
        }

        public function Out($value)
        {
            echo $value;
        }

        public function Shout($value)
        {
            echo strtoupper($value);
        }

        public function Whisper($value)
        {
            echo strtolower($value);
        }


    }(...$args);
};
