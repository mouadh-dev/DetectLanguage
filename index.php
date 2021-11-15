<?php


require 'vendor\autoload.php';

$text = $argv[1];
for ($i=2;$i< count($argv);$i++){
    $text.=" ".$argv[$i];
}

$detector = new LanguageDetector\LanguageDetector();
echo "the language is ==> ".$detector->evaluate($text);


?>