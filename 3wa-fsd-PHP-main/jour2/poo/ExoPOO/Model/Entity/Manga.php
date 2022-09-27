<?php
class Manga extends Book
{
    protected string $illustrator;


    function setIllustrator(string $illustrator){
        $this->illustrator = $illustrator;
    }
    function getIllustrator(){
        return $this->illustrator;
    }
}

/**
 * Exercice 4
 */

// Ecrire la classe Manga ici
// 