<?php session_start(); ?>
<?php include 'db.php'; ?>

<?php
// Redirect if the user is not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10 p-4 bg-white rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold mb-6">Welcome, <?php echo $_SESSION['username']; ?></h2>
        <a href="create.php" class="mb-4 inline-block px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600">Add New Book</a>
        <a href="logout.php" class="mb-4 inline-block px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600">Logout</a>
        <table class="w-full table-auto border-collapse border border-gray-300">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="px-4 py-2 text-left">No.</th>
                    <th class="px-4 py-2 text-left">Title</th>
                    <th class="px-4 py-2 text-left">Author</th>
                    <th class="px-4 py-2 text-left">Genre</th>
                    <th class="px-4 py-2 text-left">Published Date</th>
                    <th class="px-4 py-2 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM books";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                
                $books = $stmt->fetchAll(PDO::FETCH_ASSOC);
                if ($books) {
                    foreach ($books as $book) {
                        echo "<tr class='border-b hover:bg-gray-100'>";
                        echo "<td class='px-4 py-2'>" . $book["id"] . "</td>";
                        echo "<td class='px-4 py-2'>" . $book["title"] . "</td>";
                        echo "<td class='px-4 py-2'>" . $book["author"] . "</td>";
                        echo "<td class='px-4 py-2'>" . $book["genre"] . "</td>";
                        echo "<td class='px-4 py-2'>" . $book["published_date"] . "</td>";
                        echo "<td class='px-4 py-2'>
                                <a href='edit.php?id=" . $book["id"] . "' class='text-yellow-500 hover:text-yellow-600'>Edit</a> | 
                                <a href='delete.php?id=" . $book["id"] . "' class='text-red-500 hover:text-red-600'>Delete</a> |
                                <a href='review.php?id=" . $book["id"] . "' class='text-blue-500 hover:text-blue-600'>Review</a>
                              </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='7' class='px-4 py-2 text-center'>No books found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
