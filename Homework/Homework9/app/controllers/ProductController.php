<?php

class ProductController extends Controller
{
    public function index()
    {
        $this->view('product/search');
    }

    public function search()
    {
        $type = isset($_POST['type']) ? $_POST['type'] : '';

        $productModel = $this->model('Product');

        if (!empty($type)) {
            $products = $productModel->getProductsByType($type);
        } else {
            $products = $productModel->getAllProducts();
        }

        $data['products'] = $products;
        $this->view('product/results', $data);
    }
}
