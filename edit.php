<?php
include 'db.php';

// Get the book ID from the URL
$id = $_GET['id'];

// Fetch the book's current details
$sql = "SELECT * FROM books WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
$book = $stmt->fetch(PDO::FETCH_ASSOC);

// If the book is not found, redirect to the index page
if (!$book) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10 p-4 bg-white rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold mb-6">Edit Book</h2>
        <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $book['id']; ?>">

            <div class="mb-4">
                <label for="title" class="block text-lg font-medium mb-2">Title:</label>
                <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" id="title" name="title" value="<?php echo $book['title']; ?>" required>
            </div>

            <div class="mb-4">
                <label for="author" class="block text-lg font-medium mb-2">Author:</label>
                <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" id="author" name="author" value="<?php echo $book['author']; ?>" required>
            </div>

            <div class="mb-4">
                <label for="genre" class="block text-lg font-medium mb-2">Genre:</label>
                <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" id="genre" name="genre" value="<?php echo $book['genre']; ?>" required>
            </div>

            <div class="mb-4">
                <label for="published_date" class="block text-lg font-medium mb-2">Published Date:</label>
                <input type="date" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" id="published_date" name="published_date" value="<?php echo $book['published_date']; ?>" required>
            </div>

            <button type="submit" class="w-full py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">Update Book</button>
        </form>
    </div>
</body>
</html>
