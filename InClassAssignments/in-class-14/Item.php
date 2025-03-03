<?php
namespace Store;

class Item {
    private string $name;
    private float $price;
    private string $description;

    public function __construct(string $name, float $price, string $description) {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }

    public function getItemData(): string {
        $data = [
            'name' => $this->name,
            'price' => $this->price,
            'description' => $this->description
        ];
        return json_encode($data);
    }
}
