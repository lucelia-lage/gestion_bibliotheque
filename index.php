<?php
require_once('./models/classes/Author.php');
require_once('./models/classes/Book.php');
require_once('./models/classes/Borrower.php');
require_once('./models/classes/Loan.php');

$author = new Author("Weber"); 
$book = new Book("La trilogie des fourmis", $author); 
$author->addBook($book);
$borrower = new Borrower("Yolo"); 
$loan = new Loan($book, $borrower); 
$loan->borrow();

echo "Emprunteur : " . $borrower->getName() . " :<br>";
foreach ($borrower->getBorrowedBooks() as $borrowedBook) {
    echo "- " . $borrowedBook->getTitle() . "<br>";
}
$loan->return();
?> 
