<?php
require 'flight/Flight.php';
require 'RedBean/rb-mysql.php';
require 'stripe\stripe-php-7.107.0/init.php';
R::setup('mysql:host=localhost;dbname=mkddb', 'root', '');
Flight::set('flight.views.path', 'tests/views/products');
$stripeKeys = [
    'publisher_Key' => 'pk_test_51K6K7gDDfhLaa0mEfluxT1wsKKThLFG2Lq6tQzlS7ooJMcl20Qlp7vzk9t8Cqv6kX11k9z5LUxPHZFZ5BIKCjX3i00NpqxvvAj',
    'secret_key' => 'sk_test_51K6K7gDDfhLaa0mE3FR4zkidL9KCb6zr4zRP9yWPorP2UkC6lxIOxNCMOoSA29B3RE13FzzGjF9W8vmzGnU4WDWR00VdSl3gUu'
];
\Stripe\Stripe::setApiKey($stripeKeys['secret_key']);
// $product = R::dispense('products');
// $product->title = 'laptop 1';
// $product->discription = 'HardDisk 750 gb Hssd  Ram 8Gb ';
// $product->image = 'image1';
// $product->price = '100000';
// R::store($product);

// $orders = R::dispense('orders');
// $orders->productId = 1;
// $orders->total = 60000;
// $orders->stripeId = '';
// $orders->status = 'pass';
// R::store($orders);

Flight::route('/', function () {
    $products = R::findAll('products');
    Flight::render('products.php', array('products' => $products));
});

Flight::route('/product/(@productId)', function ($productId) {
    $Singleproduct = [];
    $Singleproduct = R::load('products', $productId);

    Flight::render('products.php', ['Singleproduct' => $Singleproduct]);
});



Flight::start();
