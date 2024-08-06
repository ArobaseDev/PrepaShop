<?php
// Constante nous permettant l'accès au fichier data.json
define('DATA', __DIR__ .'/data.json');

// Fonction pour un var_dump préformaté
function myVarDump($var) {
  echo '<pre class="container my-var-dump">';
          var_dump($var);
          echo '</pre>';
}

// Récupération de l'ensemble des produits
function getProducts() {
  $products = file_get_contents(DATA);
  return json_decode($products, true);
}

// Récupération d'un produit depuis son ID 
function getProductById($id) {
  $products = getProducts();
  foreach ($products as $product) {
        if ($product['id'] == $id) {
            return $product;
        }
    }
    return null;
}

// Récupération des produits par catégorie
function getProductsByCategory($category) {
  $products = getProducts();
  $filteredProducts =  array_filter($products, function($product) use ($category) {
 return ($product['categorie'] == $category);
  });
  return $filteredProducts;
}

// Récupération de l'ensemble des produits en promotion
function getProductsByPromotion() {
  $products = getProducts();
  $filteredProducts = array_filter($products, function($product) {
    return ($product['promotion'] == true);
  });
  return $filteredProducts;
}