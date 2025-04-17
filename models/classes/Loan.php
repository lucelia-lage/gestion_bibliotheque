
<?php

class Loan implements InterfaceLoan { 
    private $book; // livre emprunté
    private $borrower; // emprunteur qui prend le livre

    public function __construct($book, $borrower) { // il faut un livre et un emprunteur pour faire un prêt
        $this->book = $book;
        $this->borrower = $borrower;
    }
    public function borrow() { // on fait un prêt
        $this->borrower->borrowBook($this->book); // on ajoute le livre à la liste de livres empruntés par l'emprunteur
        echo $this->borrower->getName() . " emprunte " . $this->book->getTitle() . ".<br>";
    }
    public function return() { // on rend le livre
        echo $this->borrower->getName() . " rend " . $this->book->getTitle() . ".<br>";
    }
}


// à faire : un livre doit être dispo pour être emprunté !!! combien on a de chaque livre ? 
?>

