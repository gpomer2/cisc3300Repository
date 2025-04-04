<?php require_once "../app/views/layout/header.php"; ?>

<h2>Search for a Product by Type</h2>

<form action="/my_mvc_project/product/search" method="POST">
    <label for="type">Product Type:</label>
    <input type="text" name="type" id="type" placeholder="e.g. Tools, Furniture...">
    <button type="submit">Search</button>
</form>

<?php require_once "../app/views/layout/footer.php"; ?>
