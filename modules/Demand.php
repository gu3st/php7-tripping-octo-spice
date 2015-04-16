<?php
return function($class){
    return include(__DIR__ . "/" . $class . ".php");
};