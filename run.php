<?php

$demand = include(__DIR__ ."/modules/Demand.php");
$output = $demand("Output");

$x = $output("Z",'Y');

$x->Whisper("I DON'T KNOW WHAT WE'RE YELLING ABOUT" . PHP_EOL);