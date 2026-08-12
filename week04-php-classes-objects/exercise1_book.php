<?php
// Exercise 1: Book class with properties, getters/setters, and validation

class Book {
    private $book_id;
    private $title;
    private $author;
    private $publisher;
    private $year_published;
    private $price;

    // Constructor initialises values using the setters, so validation runs immediately
    public function __construct($book_id, $title, $author, $publisher, $year_published, $price) {
        $this->setBookId($book_id);
        $this->setTitle($title);
        $this->setAuthor($author);
        $this->setPublisher($publisher);
        $this->setYearPublished($year_published);
        $this->setPrice($price);
    }

    // ---- Setters (with validation) ----

    public function setBookId($value) {
        if (is_numeric($value)) {
            $this->book_id = $value;
        } else {
            echo "<p>Error: book_id must be numeric.</p>";
        }
    }

    public function setTitle($value) {
        $this->title = $value;
    }

    public function setAuthor($value) {
        $this->author = $value;
    }

    public function setPublisher($value) {
        $this->publisher = $value;
    }

    public function setYearPublished($value) {
        $currentYear = date("Y");
        if ($value >= 1900 && $value <= $currentYear) {
            $this->year_published = $value;
        } else {
            echo "<p>Error: year_published must be between 1900 and $currentYear.</p>";
        }
    }

    public function setPrice($value) {
        if (is_numeric($value) && $value > 0) {
            $this->price = $value;
        } else {
            echo "<p>Error: price must be greater than 0.</p>";
        }
    }

    // ---- Getters ----

    public function getBookId() { return $this->book_id; }
    public function getTitle() { return $this->title; }
    public function getAuthor() { return $this->author; }
    public function getPublisher() { return $this->publisher; }
    public function getYearPublished() { return $this->year_published; }
    public function getPrice() { return $this->price; }
}

// Create one book object using the constructor
$book1 = new Book(101, "Learn PHP8", "Steve Prettyman", "Apress", 2020, 45.99);

echo "<h3>Book details before modification:</h3>";
echo "ID: " . $book1->getBookId() . "<br>";
echo "Title: " . $book1->getTitle() . "<br>";
echo "Author: " . $book1->getAuthor() . "<br>";
echo "Publisher: " . $book1->getPublisher() . "<br>";
echo "Year Published: " . $book1->getYearPublished() . "<br>";
echo "Price: $" . number_format($book1->getPrice(), 2) . "<br>";

// Modify two properties using set methods
$book1->setPrice(39.99);
$book1->setYearPublished(2022);

echo "<h3>Book details after modification:</h3>";
echo "ID: " . $book1->getBookId() . "<br>";
echo "Title: " . $book1->getTitle() . "<br>";
echo "Author: " . $book1->getAuthor() . "<br>";
echo "Publisher: " . $book1->getPublisher() . "<br>";
echo "Year Published: " . $book1->getYearPublished() . "<br>";
echo "Price: $" . number_format($book1->getPrice(), 2) . "<br>";
?>