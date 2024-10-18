<?php

namespace App\entity;

class Product
{

    private ?int $id;
    private string $name;
    private float $price;
    private string $description;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public static function hydrate(array $data){

        $product = new Product();
        $product->setId($data['id'] ?? null);
        $product->setName($data['name']);
        $product->setPrice($data['price']);
        $product->setDescription("Ceci est une description");

        return $product;
    }

}