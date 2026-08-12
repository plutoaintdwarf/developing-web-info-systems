<?php
// Exercise 2: Product class for tracking electronics store inventory

class Product {
    private $product_id;
    private $product_name;
    private $category;
    private $stock_quantity;
    private $price;

    private $validCategories = ["Laptop", "Phone", "Tablet", "Accessory"];

    public function __construct($product_id, $product_name, $category, $stock_quantity, $price) {
        $this->setProductId($product_id);
        $this->setProductName($product_name);
        $this->setCategory($category);
        $this->setStockQuantity($stock_quantity);
        $this->setPrice($price);
    }

    // ---- Setters (with validation) ----

    public function setProductId($value) {
        if (preg_match('/^\d{4}$/', $value)) {
            $this->product_id = $value;
        } else {
            echo "<p>Error: product_id must be exactly 4 digits (got '$value').</p>";
        }
    }

    public function setProductName($value) {
        $this->product_name = $value;
    }

    public function setCategory($value) {
        if (in_array($value, $this->validCategories)) {
            $this->category = $value;
        } else {
            echo "<p>Error: category must be Laptop, Phone, Tablet, or Accessory (got '$value').</p>";
        }
    }

    public function setStockQuantity($value) {
        if (is_numeric($value) && $value >= 0 && $value <= 200) {
            $this->stock_quantity = $value;
        } else {
            echo "<p>Error: stock_quantity must be between 0 and 200 (got '$value').</p>";
        }
    }

    public function setPrice($value) {
        if (is_numeric($value) && $value > 0 && $value < 5000) {
            $this->price = $value;
        } else {
            echo "<p>Error: price must be less than \$5000 (got '$value').</p>";
        }
    }

    // ---- Getters ----

    public function getProductId() { return $this->product_id; }
    public function getProductName() { return $this->product_name; }
    public function getCategory() { return $this->category; }
    public function getStockQuantity() { return $this->stock_quantity; }
    public function getPrice() { return $this->price; }
}

// Create 5 product objects
$products = [
    new Product(1001, "Dell XPS 13", "Laptop", 15, 1499.99),
    new Product(1002, "iPhone 15", "Phone", 40, 999.00),
    new Product(1003, "iPad Air", "Tablet", 25, 599.00),
    new Product(1004, "USB-C Cable", "Accessory", 150, 12.99),
    new Product(1005, "Samsung Galaxy Tab", "Tablet", 18, 349.50),
];

// Display a product report table using getter methods
echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr><th>Product ID</th><th>Name</th><th>Category</th><th>Stock</th><th>Price</th></tr>";

foreach ($products as $product) {
    echo "<tr>";
    echo "<td>" . $product->getProductId() . "</td>";
    echo "<td>" . $product->getProductName() . "</td>";
    echo "<td>" . $product->getCategory() . "</td>";
    echo "<td>" . $product->getStockQuantity() . "</td>";
    echo "<td>$" . number_format($product->getPrice(), 2) . "</td>";
    echo "</tr>";
}

echo "</table>";
?>