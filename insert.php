<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $genre = $_POST['genre'];
    $published_date = $_POST['published_date'];

    $sql = "INSERT INTO books (title, author, genre, published_date, status) VALUES (:title, :author, :genre, :published_date, 'available')";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':author', $author);
    $stmt->bindParam(':genre', $genre);
    $stmt->bindParam(':published_date', $published_date);

    if ($stmt->execute()) {
        header("Location: index.php");
    } else {
        echo "Error: " . $stmt->errorInfo();
    }
}
?>