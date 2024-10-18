<?php

namespace App\repository;

use App\database\Database;
use App\entity\Product;

class ProductRepository
{

    public static function findAll()
    {

        $db = Database::getInstance();

        $sql = "SELECT * FROM articles";

        $results = $db->find($sql);

        $products = [];
        foreach ($results as $result) {
            $products[] = Product::hydrate($result);
        }

        return $products;
    }

    public static function add(Product $product)
    {

        $db = Database::getInstance();

        $sql = "INSERT INTO articles (name, price) VALUES (:name, :price)";
        $db->execute($sql, ['name' => $product->getName(), 'price' => $product->getPrice()]);

    }


}