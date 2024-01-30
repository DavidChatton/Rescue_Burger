<?php

class Product {

    public $products =[];
    private $bdd;

    public function __construct($bdd)
    {
        $this->bdd = $bdd;
    }

    public function addProduct($product) {
        $this->products[] = $product;
    }

    public function getIngredientsForProduct($productId)
    {
        $query = $this->bdd->prepare ("SELECT i.name, i.weight, i.calories FROM `ingredients` AS i LEFT JOIN `products_ingredients` AS p_i ON p_i.ingredient_id = i.id WHERE p_i.product_id = :product_id;");
        $query->execute([
            ':product_id' => $productId,
        ]);
        return $query->fetchAll();
    }

    public function calculCaloriesForProduct() {
        $this->getIngredientsForProduct(($productId));
        foreach ($this->products as $product) {
            

        }
    }






    class Factory{
        public $products =[];
    
        public function addProduct($product) {
            $this->products[] = $product;
        }
    
        public function inventory() {
            foreach($this->products as $product) {
                echo ' price:'.$product->getPrice().'<br>';
                $product->inventory();
                echo ' purchase:'.$product->purchase_price.'<br>';
            }
        }
    }


   
}



require 'View/allproducts.php';