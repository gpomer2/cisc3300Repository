<?php

class ProductController
{
    private $productModel;

    public function __construct()
    {
        require_once '../app/models/Product.php';
        $this->productModel = new Product();
    }

    // Default method -> /Product/index
    public function index()
    {
        // This will display a list of products
        // If there's a search query, filter
        $search = isset($_GET['search']) ? $_GET['search'] : null;
        $products = $this->productModel->getAllProducts($search);
        require_once '../app/views/products/index.php';
    }

    // GET -> /Product/create
    // Show the create product form
    public function create()
    {
        require_once '../app/views/products/create.php';
    }

    // POST -> /Product/store
    // Handle the creation of a product
    public function store()
    {
        if (isset($_POST['name'], $_POST['description'], $_POST['price'])) {
            $this->productModel->createProduct($_POST['name'], $_POST['description'], $_POST['price']);
        }
        header('Location: /Product/index');
    }

    // GET -> /Product/edit/1
    // Show edit form for product with id = 1
    public function edit($id)
    {
        $product = $this->productModel->getProductById($id);
        require_once '../app/views/products/update.php';
    }

    // POST -> /Product/update/1
    // Handle updating the product with id = 1
    public function update($id)
    {
        if (isset($_POST['name'], $_POST['description'], $_POST['price'])) {
            $this->productModel->updateProduct($id, $_POST['name'], $_POST['description'], $_POST['price']);
        }
        header('Location: /Product/index');
    }

    // GET -> /Product/delete/1
    // Display a confirmation or directly delete
    public function delete($id)
    {
        // Option 1: Directly delete then redirect
        $this->productModel->deleteProduct($id);
        header('Location: /Product/index');

        // Option 2: Show a "confirm delete" page if you prefer
        // require_once '../app/views/products/delete.php';
    }
}
