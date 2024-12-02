<?php include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST['id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $genre = $_POST['genre'];
    $published_date = $_POST['published_date'];


    $sql = "UPDATE books SET title = :title, author = :author, genre = :genre, published_date = :published_date WHERE id = :id";
    $stmt = $conn->prepare($sql);


    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':author', $author);
    $stmt->bindParam(':genre', $genre);
    $stmt->bindParam(':published_date', $published_date);
    $stmt->bindParam(':id', $id);

    
    if ($stmt->execute()) {
        header("Location: index.php"); // Redirect to the main page after update
    } else {
        echo "Error updating record: " . $stmt->errorInfo();
    }
}
?>
Step 3: Link to the Edit Page (index.php)
Ensure that you have a link in the index.php file that lets the user edit a book's details. You likely already have the "Edit" link inside the table row in the books list, but here's a reminder of what it might look like:

php
Copy code
<td class="px-4 py-2">
    <a href="edit.php?id=<?php echo $book['id']; ?>" class="text-yellow-500 hover:text-yellow-600">Edit</a> | 
    <a href="delete.php?id=<?php echo $book['id']; ?>" class="text-red-500 hover:text-red-600">Delete</a>
</td>