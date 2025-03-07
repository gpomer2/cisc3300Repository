<!DOCTYPE html>
<html lang="en">
<head>
    <title>Error</title>
</head>
<body>
    <h1>There were errors with your submission:</h1>
    <ul>
        <?php foreach ($errors as $error) : ?>
            <li><?php echo $error; ?></li>
        <?php endforeach; ?>
    </ul>
    <a href="index.php">Go Back</a>
</body>
</html>
