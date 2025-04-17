
<?php

class Loan implements InterfaceLoan { 
    private $book; 
    private $borrower;

    public function __construct($book, $borrower) {
        $this->book = $book;
        $this->borrower = $borrower;
    }
    public function borrow() {
        $this->borrower->borrowBook($this->book);
        echo $this->borrower->getName() . " emprunte " . $this->book->getTitle() . ".<br>";
    }
    public function return() {
        echo $this->borrower->getName() . " rend " . $this->book->getTitle() . ".<br>";
    }
}
?>
