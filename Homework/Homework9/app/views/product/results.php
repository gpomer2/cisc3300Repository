<?php require_once "../app/views/layout/header.php"; ?>

<h2>Search Results</h2>

<?php if (isset($data['products']) && count($data['products']) > 0): ?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Type</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['products'] as $product): ?>
            <tr>
                <td><?php echo htmlspecialchars($product['id']); ?></td>
                <td><?php echo htmlspecialchars($product['name']); ?></td>
                <td><?php echo htmlspecialchars($product['type']); ?></td>
                <td><?php echo htmlspecialchars($product['price']); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>No products found for that type.</p>
<?php endif; ?>

<?php require_once "../app/views/layout/footer.php"; ?>
