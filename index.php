<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header('Location: pastes.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tailzbin - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex items-center justify-center h-screen bg-gray-900">
    <div class="bg-gray-800 p-8 rounded shadow-lg">
        <h1 class="text-white text-2xl mb-6">Login</h1>
        <form action="login.php" method="POST">
            <div class="mb-4">
                <label class="block text-gray-400">Username:</label>
                <input type="text" name="username" class="mt-1 block w-full p-2 rounded bg-gray-700 border border-gray-600" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-400">Password:</label>
                <input type="password" name="password" class="mt-1 block w-full p-2 rounded bg-gray-700 border border-gray-600" required>
            </div>
            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded">Login</button>
        </form>
    </div>
</body>
</html>
