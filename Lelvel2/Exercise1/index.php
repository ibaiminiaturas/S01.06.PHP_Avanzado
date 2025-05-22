<!--Sprint 1. Chapter 6. Level 2. Exercise 1. 
Crea una classe que representi un recurs didàctic d’aquesta especialitat. 
Els recursos hauran de tenir un nom, un tema (que només podrà ser PHP, CSS, HTML, SQL, Laravel) un URL i un tipus de recurs (Fitxer, Article web, Vídeo). 
Implementa tant el tema com el tipus de recurs amb enums.

-->
<?php

require_once __DIR__  . "\DidacticResource.php";

$resource1  = new DidacticResource("PHP Basics", Subject::PHP, "https://www.php-basics.com", ResourceType::WEB_ARTICLE);
$resource2  = new DidacticResource("CSS", Subject::CSS, "https://tinyurl.com/3ut8k9k2", ResourceType::VIDEO);
$resource3  = new DidacticResource("HTML", Subject::HTML, "https://www.html-basics.com", ResourceType::FILE);
$resource4  = new DidacticResource("SQL", Subject::SQL, "https://www./sql-basics.com", ResourceType::WEB_ARTICLE);
$resource5  = new DidacticResource("Laravel", Subject::LARAVEL, "https://tinyurl.com/3ut8k9k2", ResourceType::VIDEO);

echo $resource1 . PHP_EOL;
echo $resource2 . PHP_EOL;        
echo $resource3 . PHP_EOL;
echo $resource4 . PHP_EOL;
echo $resource5 . PHP_EOL;


?>