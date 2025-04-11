<?php require_once '../app/views/layout/header.php'; ?>

<h2>Add New Product</h2>

<form action="/Product/store" method="POST">
    <div>
        <label for="name">Product Name:</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea>
    </div>
    <div>
        <label for="price">Price ($):</label>
        <input type="number" step="0.01" id="price" name="price" required>
    </div>
    <button type="submit">Save</button>
</form>

<?php require_once '../app/views/layout/footer.php'; ?>
