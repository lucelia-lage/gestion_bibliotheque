
<?php

class Borrower implements InterfaceBorrower {
    private $name; // orga : nom de l'emprunteur
    private $borrowedBooks = []; // livres empruntés 
    
    public function __construct($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
    public function borrowBook($book) { // + un livre dans la liste de livres pris
        $this->borrowedBooks[] = $book;
    }
    public function getBorrowedBooks() { // la liste ici !
        return $this->borrowedBooks;
    }
}
