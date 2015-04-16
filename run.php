<?php

$demand = include(__DIR__ ."/modules/Demand.php");
$output = $demand("Output");

var_dump($output);

$output->Whisper("I DON'T KNOW WHAT WE'RE YELLING ABOUT" . PHP_EOL);