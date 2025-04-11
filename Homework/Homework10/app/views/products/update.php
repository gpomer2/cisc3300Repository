<?php require_once '../app/views/layout/header.php'; ?>

<h2>Update Product</h2>

<?php if ($product): ?>
    <form action="/Product/update/<?php echo $product['id']; ?>" method="POST">
        <div>
            <label for="name">Product Name:</label>
            <input type="text" id="name" name="name"
                   value="<?php echo htmlspecialchars($product['name']); ?>" required>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description" required><?php echo htmlspecialchars($product['description']); ?></textarea>
        </div>
        <div>
            <label for="price">Price ($):</label>
            <input type="number" step="0.01" id="price" name="price"
                   value="<?php echo htmlspecialchars($product['price']); ?>" required>
        </div>
        <button type="submit">Update</button>
    </form>
<?php else: ?>
    <p>Product not found.</p>
<?php endif; ?>

<?php require_once '../app/views/layout/footer.php'; ?>
