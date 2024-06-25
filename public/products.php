<?php
require_once '../vendor/autoload.php';

// Configuration de Twig
$loader = new \Twig\Loader\FilesystemLoader('../src/View');
$twig = new \Twig\Environment($loader, [
    'debug' => true, // Active le mode debug
]);

// Initialisation du tableau des produits
$products = ['guitare', 'bass', 'banjo', 'cithare', 'lyre', 'harpe'];

// Appel du template products.html.twig
echo $twig->render('products.html.twig', ['products' => $products]);
