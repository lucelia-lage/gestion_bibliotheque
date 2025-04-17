
<?php

class Borrower implements InterfaceBorrower {
    private $name; 
    private $borrowedBooks = []; 
    
    public function __construct($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
    public function borrowBook($book) {
        $this->borrowedBooks[] = $book;
    }
    public function getBorrowedBooks() {
        return $this->borrowedBooks;
    }
}
