<?php
require_once('./models/classes/Author.php');
require_once('./models/classes/Book.php');
require_once('./models/classes/Borrower.php');
require_once('./models/classes/Loan.php');

// on peut créer des auteurs : 
$author = new Author("Weber"); 
// on peut créer des livres en lien avec certain auteur :
$book = new Book("La trilogie des fourmis", $author); 
// on add un livre à un auteur :
$author->addBook($book);
// on peut créer un emprunteur :
$borrower = new Borrower("Yolo"); 
// on peut créer un emprunt (un certain livre + un certain emprunteur) :
$loan = new Loan($book, $borrower); 
// Yolo prend le livre de Weber :
$loan->borrow();

echo "Emprunteur : " . $borrower->getName() . " :<br>";
foreach ($borrower->getBorrowedBooks() as $borrowedBook) { // un for each sur les livres empruntés par Yolo 
    echo "- " . $borrowedBook->getTitle() . "<br>";
}
$loan->return(); // Yolo rend le livre 
?> 
