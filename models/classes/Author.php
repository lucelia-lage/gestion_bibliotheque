
<?php

class Author implements InterfaceAuthor {
    private $name; 
    private $books = []; 

    public function __construct($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
    public function addBook($book) {
        $this->books[] = $book;
    }
    public function getBooks() {
        return $this->books;
    }
}
