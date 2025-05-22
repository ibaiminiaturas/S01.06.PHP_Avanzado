<!--Sprint 1. Chapter 6. Level 2. Exercise 1. 
Crea una classe que representi un recurs didàctic d’aquesta especialitat. 
Els recursos hauran de tenir un nom, un tema (que només podrà ser PHP, CSS, HTML, SQL, Laravel) un URL i un tipus de recurs (Fitxer, Article web, Vídeo). 
Implementa tant el tema com el tipus de recurs amb enums.

-->

<?php

enum Subject {
    case PHP;
    case CSS;
    case HTML;
    case SQL;
    case LARAVEL;
}

enum ResourceType {
    case FILE;
    case WEB_ARTICLE;
    case VIDEO;
}

class DidacticResource {
    private string $name;
    private Subject $subject;
    private string $url;
    private ResourceType $resourceType;
    
    public function __construct(string $name, Subject $subject, string $url, ResourceType $resourceType) {
        $this->name = $name;
        $this->subject = $subject;
        $this->url = $url;
        $this->resourceType = $resourceType;
    }

    public function __toString():string {
        return "Name:" . $this->name . ", Subject: " . $this->subject->name . ", URL:" . $this->url . ", Resource Type:" . $this->resourceType->name;
    }
}
?>