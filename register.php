<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10 p-4 bg-white rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold mb-6">Create Account</h2>
        <form action="register_action.php" method="post">
            <div class="mb-4">
                <label for="username" class="block text-lg font-medium mb-2">Username:</label>
                <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg" id="username" name="username" required>
            </div>

            <div class="mb-4">
                <label for="password" class="block text-lg font-medium mb-2">Password:</label>
                <input type="password" class="w-full px-4 py-2 border border-gray-300 rounded-lg" id="password" name="password" required>
            </div>

            <div class="mb-4">
                <label for="confirm_password" class="block text-lg font-medium mb-2">Confirm Password:</label>
                <input type="password" class="w-full px-4 py-2 border border-gray-300 rounded-lg" id="confirm_password" name="confirm_password" required>
            </div>

            <button type="submit" class="w-full py-2 bg-green-500 text-white rounded-lg hover:bg-green-600">Create Account</button>
        </form>
    </div>
</body>
</html>
