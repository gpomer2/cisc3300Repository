<?php

namespace Controllers;

require_once __DIR__ . '/../Models/postModel.php';

use Models\postModel;

class postController {
    public function index() {
        $postModel = new postModel();
        $posts = $postModel->getAllPosts();
        header('Content-Type: application/json');
        echo json_encode($posts);
    }
}
