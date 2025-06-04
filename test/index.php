<?php

use Ngomafortuna\StringFormatter\StringFormatter;

require_once dirname(__FILE__, 2) . "/vendor/autoload.php";

$title = "O caminho da     canção asul---a-----f";

$phrase = "Text formatter to cat end create slug with base in a phrase.";


$formatter = new StringFormatter;

dump($formatter->slug($title));

dump($formatter->cat($phrase, 20));