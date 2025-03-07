<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create Note</title>
    <style>
        body { font-family: Arial, sans-serif; }
        form { max-width: 500px; margin: 50px auto; }
    </style>
</head>
<body>
    <h1>Create a Note</h1>
    <form method="POST" action="index.php">
        <label for="title">Title:</label><br>
        <input type="text" name="title" id="title" required><br><br>

        <label for="description">Description:</label><br>
        <textarea name="description" id="description" required></textarea><br><br>

        <button type="submit">Save Note</button>
    </form>
</body>
</html>
