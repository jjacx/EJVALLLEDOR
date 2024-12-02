<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10 p-4 bg-white rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold mb-6">Add New Book</h2>
        <form action="insert.php" method="post">
            <div class="mb-4">
                <label for="title" class="block text-lg font-medium mb-2">Title of the book:</label>
                <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" id="title" name="title" required>
            </div>

            <div class="mb-4">
                <label for="author" class="block text-lg font-medium mb-2">Author:</label>
                <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" id="author" name="author" required>
            </div>

            <div class="mb-4">
                <label for="genre" class="block text-lg font-medium mb-2">Genre:</label>
                <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" id="genre" name="genre" required>
            </div>

            <div class="mb-4">
                <label for="published_date" class="block text-lg font-medium mb-2">Published Date:</label>
                <input type="date" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" id="published_date" name="published_date" required>
            </div>

            <button type="submit" class="w-full py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">Add Book</button>
        </form>
    </div>
</body>
</html>