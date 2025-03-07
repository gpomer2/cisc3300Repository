<?php

class NoteController {
    public function create() {
        include 'views/createNote.php';
    }

    public function store() {
        $title = htmlspecialchars(trim($_POST['title'] ?? ''));
        $description = htmlspecialchars(trim($_POST['description'] ?? ''));

        $errors = [];

        if (strlen($title) <= 3) {
            $errors[] = "Title must be longer than 3 characters.";
        }
        if (strlen($description) <= 10) {
            $errors[] = "Description must be longer than 10 characters.";
        }

        if (!empty($errors)) {
            include 'views/error.php';
        } else {
            // In a real app, save data to database, for now just show success.
            include 'views/success.php';
        }
    }
}
