# String formatter
Simple string formatter (Formadador de texto simples)

This component have two features:
- cat: to cat text or phrase
- slug: to generator slug based on the a phrase

## Require
Necessary PHP 8.0 or more (Necessário PHP 8.0 ou superior)

## Install
composer require ngomafortuna/string-formatter

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

$title = "O caminho da     canção asul---a-----f";
$phrase = "Text formatter to cat end create slug with base in a phrase.";


$formatter = new StringFormatter;

var_dump($formatter->slug($title));
var_dump($formatter->cat($phrase, 20));
```

Result
```shell
"o-caminho-da-cancao-asul-a-f"
"Text formatter to ..."
```