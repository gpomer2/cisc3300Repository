<?php

namespace Models;

class postModel {
    public function getAllPosts() {
        return [
            ['title' => 'Intro to PHP', 'description' => 'Learn PHP basics'],
            ['title' => 'Working with Arrays', 'description' => 'Learn how arrays work'],
            ['title' => 'Building Routes', 'description' => 'Simple routing in PHP'],
            ['title' => 'MAMP Setup', 'description' => 'Setting up projects in MAMP']
        ];
    }
}
