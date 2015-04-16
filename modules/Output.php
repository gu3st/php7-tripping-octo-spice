<?php
return class{

    public function Out($value){
        echo $value;
    }

    public function Shout($value){
        echo strtoupper($value);
    }

    public function Whisper($value){
        echo strtolower($value);
    }

};
