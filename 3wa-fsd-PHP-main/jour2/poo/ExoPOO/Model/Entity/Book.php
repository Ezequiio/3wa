<?php
class Book
{
    protected string $title;
    protected string $author;
    protected string $genre;
    protected string $description;
    protected string $dateInstanciation;


    public function getTitle() {
        return $this->title;
    }
    public function getAuthor() {
        return $this->author;
    }
    public function getDescription() {
        return $this->description;
    }
    public function getGenre() {
        return $this->genre;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }
    public function setAuthor(string $author){
        $this->author = $author;
    }
    public function setGenre(string $genre){
        $this->genre = $genre;
    }
    public function setDescription(string $description) {
        $this->description = $description;
    }
    public function __construct($dateInstanciation = null)
    {
        $this->dateInstanciation = date('d/m/Y à h:i:s');
    }
    public function setDateInstanciation($dateInstanciation) {
        $this->dateInstanciation = $dateInstanciation;
    }
    public function getDateInstanciation(){
        return $this->dateInstanciation;
    }
}

