<?php session_start(); ?>
<?php include 'db.php'; ?>

<?php
// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Get the book ID from the URL
$book_id = $_GET['id'];

// Handle review submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $review = $_POST['review'];
    $user_id = $_SESSION['user_id'];

    $sql = "INSERT INTO reviews (user_id, book_id, review) VALUES (:user_id, :book_id, :review)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':user_id', $user_id);
    $stmt->bindParam(':book_id', $book_id);
    $stmt->bindParam(':review', $review);

    if ($stmt->execute()) {
        header("Location: dashboard.php");
    } else {
        echo "Error: " . $stmt->errorInfo();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Book</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10 p-4 bg-white rounded-lg shadow
