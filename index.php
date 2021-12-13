<?php
require 'flight/Flight.php';
require 'RedBean/rb-mysql.php';
R::setup('mysql:host=localhost;dbname=mkddb', 'root', '');
Flight::set('flight.views.path', 'tests/views/products');
// $product = R::dispense('products');
// $product->title = 'laptop 1';
// $product->discription = 'HardDisk 750 gb Hssd  Ram 8Gb ';
// $product->image = 'image1';
// $product->price = '100000';
// R::store($product);

// $product->title = 'laptop 2';
// $product->discription = 'HardDisk 1Tb   Ram 8Gb ';
// $product->image = 'image2';
// $product->price = '200000';
// R::store($product);

// $product->title = 'laptop 3';
// $product->discription = 'HardDisk 2Tb  Ram 8Gb ';
// $product->image = 'image3';
// $product->price = '300000';
// R::store($product);

// $product->title = 'laptop 4';
// $product->discription = 'HardDisk 3Tb  Ram 8Gb ';
// $product->image = 'image4';
// $product->price = '100000';
// R::store($product);

// $product->title = 'laptop 5';
// $product->discription = 'HardDisk 4Tb  Ram 8Gb ';
// $product->image = 'image5';
// $product->price = '500000';
// R::store($product);

// $post = R::load('post', 1);

Flight::route('/', function () {
    $products = R::findAll('products');
    Flight::render('products.php', array('products' => $products));
});

Flight::route('/product/(@productId)', function ($productId) {
    $product = R::load('products', $productId);
    Flight::render('products.php', array('name' => $product));
});



Flight::start();
