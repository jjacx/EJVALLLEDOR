<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <a href="register.php" class="text-blue-500 hover:text-blue-600">Create a new account</a>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10 p-4 bg-white rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold mb-6">Login</h2>
        <form action="login_action.php" method="post">
            <div class="mb-4">
                <label for="username" class="block text-lg font-medium mb-2">Username:</label>
                <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg" id="username" name="username" required>
            </div>

            <div class="mb-4">
                <label for="password" class="block text-lg font-medium mb-2">Password:</label>
                <input type="password" class="w-full px-4 py-2 border border-gray-300 rounded-lg" id="password" name="password" required>
            </div>

            <button type="submit" class="w-full py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Login</button>
        </form>
    </div>
</body>
</html>
