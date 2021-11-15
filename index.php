<?php


require 'vendor\autoload.php';

$text = $argv[1];
for ($i=2;$i< count($argv);$i++){
    $text.=" ".$argv[$i];
}

$detector = new LanguageDetector\LanguageDetector();

echo $detector->evaluate($text);

//echo "hte language is\n";
//echo $detector->evaluate($text);


?>