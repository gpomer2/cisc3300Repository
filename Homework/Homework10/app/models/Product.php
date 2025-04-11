<?php

class Product
{
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function getAllProducts($search = null)
    {
        if ($search) {
            $stmt = $this->db->prepare("SELECT * FROM products WHERE name LIKE :search OR description LIKE :search");
            $stmt->execute(['search' => '%' . $search . '%']);
        } else {
            $stmt = $this->db->query("SELECT * FROM products ORDER BY id DESC");
        }
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createProduct($name, $description, $price)
    {
        $stmt = $this->db->prepare("INSERT INTO products (name, description, price) VALUES (?, ?, ?)");
        return $stmt->execute([$name, $description, $price]);
    }

    public function getProductById($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM products WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateProduct($id, $name, $description, $price)
    {
        $stmt = $this->db->prepare("UPDATE products SET name = ?, description = ?, price = ? WHERE id = ?");
        return $stmt->execute([$name, $description, $price, $id]);
    }

    public function deleteProduct($id)
    {
        $stmt = $this->db->prepare("DELETE FROM products WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
