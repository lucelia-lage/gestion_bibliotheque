
<?php

class Author implements InterfaceAuthor {
    private $name; 
    private $books = []; // orga : tableau qui stoke les livres de l'auteur 

    public function __construct($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
    public function addBook($book) { // on ajoute un livre à la liste 
        $this->books[] = $book;
    }
    public function getBooks() { // la liste ici ! 
        return $this->books;
    }
}
