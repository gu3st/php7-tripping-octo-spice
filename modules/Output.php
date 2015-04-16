<?php
return function($arguments) {
    return call_user_func_array(class {

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


    }, func_get_args());
};
