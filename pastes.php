<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Pastes</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white">
    <div class="container mx-auto p-6">
        <h1 class="text-3xl mb-4">Your Pastes</h1>
        <div class="flex justify-between mb-4">
            <input type="text" placeholder="Search paste..." class="bg-gray-800 p-2 rounded w-1/2" />
            <button class="bg-blue-600 hover:bg-blue-700 p-2 rounded">Create Paste</button>
        </div>
        <div class="bg-gray-800 p-4 rounded">
            <p>No pastes yet...</p>
        </div>
    </div>
</body>
</html>
