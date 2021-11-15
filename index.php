<?php


require 'vendor\autoload.php';

$text = $argv[1];
for ($i=2;$i< count($argv);$i++){
    $text.=" ".$argv[$i];
}

$detector = new LanguageDetector\LanguageDetector();
echo "hte language is ==>";
echo $detector->evaluate($text);


//echo $detector->evaluate($text);


?>