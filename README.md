# String formatter
Simple string formatter (Formadador de texto simples)

This component have two features:
- cat: to cat text or phrase
- slug: to generator slug based on the a phrase

## Require
Necessary PHP 8.0 or more (Necessário PHP 8.0 ou superior)

## Install
Text

## Syntax and mode of use
```php
use Ngomafortuna\StringFormatter\StringFormatter;

$formatter = new StringFormatter;
$formatter->slug('Text to test');
$formatter->cat('Phrase to test features');
```

## Example
```php
use Ngomafortuna\StringFormatter\StringFormatter;

require_once dirname(__FILE__, 2) . "/vendor/autoload.php";

$title = "O caminho da     canção asul---a-----f";
$phrase = "Text formatter to cat end create slug with base in a phrase.";


$formatter = new StringFormatter;

var_dump($formatter->slug($title));
var_dump($formatter->cat($phrase, 20));
```