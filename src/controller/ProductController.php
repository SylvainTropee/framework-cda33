<?php

namespace App\controller;

use App\entity\Product;
use App\form\Form;
use App\repository\ProductRepository;

class ProductController
{


    public function addProduct()
    {

        if (isset($_POST['submit'])) {

            $product = [
                'name' => htmlspecialchars($_POST['name']),
                'price' => htmlspecialchars($_POST['price'])
            ];

            $product = Product::hydrate($product);
            ProductRepository::add($product);

            header("location: /produit/liste");

        } else {
            $userForm = new Form();
            $userForm->addInput("name", "Nom du produit");
            $userForm->addInput("price", "Prix", 'number');
            $userForm->addInput("description", "Description");
            $userForm->addSubmit("Enregistrer");

            $content = $userForm->getForm();

            require_once "../templates/product/add.php";
        }


    }


    public function listProduct()
    {

        $products = ProductRepository::findAll();
        require_once "../templates/product/list.php";
    }

}