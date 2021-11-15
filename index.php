<?php
require 'vendor\autoload.php';

$text = $argv[1];
for ($i=2;$i< count($argv);$i++){
    $text.=" ".$argv[$i];
}

$detector = new LanguageDetector\LanguageDetector();

$language = $detector->evaluate($text)->getLanguage();

echo "$text";
//echo $detector->evaluate($text);












?>