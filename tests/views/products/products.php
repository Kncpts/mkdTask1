<?php require_once('./tests/views/layouts/header.php') ?>;
<div class="container">
    <h2 class="text-center mb-5">Products</h3>
        <div class="card-group">
            <!-- <div class="card text-dark bg-light mr-1">
                <img class="card-img-top" src="images/products/p4.png" alt="image alt text here">
                <div class="card-body ">
                    <h5 class="card-title">Product Name 1</h5>
                    <p class="card-text text-left">Place some text for the Product 1 here. Place some text for the Product 1 here. Place some text for the Product 1 here.</p>
                </div>
                <div class="card-footer bg-success text-right text-danger">
                    <a href="#" class="btn btn-outline-light btn-sm">Buy Now</a> <a href="#" class="btn btn-outline-light btn-sm">More info</a>
                </div>
            </div> -->
            <?php
            if (count($products) > 0) {
                foreach ($products as $product) {
            ?>
                    <div class="card text-dark bg-light mr-1">
                        <img class="card-img-top" src="<?php dirname(__FILE__, 3) ?>/flight/public/productImages/<?php echo $product->image; ?>" alt="image alt text here">
                        <div class="card-body ">
                            <h5 class="card-title">Product Name 2</h5>
                            <p class="card-text text-left">Place some text for the Product 1 here. Place some text for the Product 1 here. Place some text for the Product 1 here. Place some text for the Product 1 here.</p>
                        </div>
                        <div class="card-footer bg-danger text-right text-danger">
                            <a href="#" class="btn btn-outline-light btn-sm">Buy Now</a> <a href="#" class="btn btn-outline-light btn-sm">More info</a>
                        </div>
                    </div>
                <?php

                }
            } else {
                ?>
                <div class="card text-dark bg-light mr-1">
                    <img class="card-img-top" src="<?php dirname(__FILE__, 3) ?>./flight/public/productImages/image2" alt="image alt text here">
                    <div class="card-body ">
                        <h5 class="card-title">Product Name 2</h5>
                        <p class="card-text text-left">Place some text for the Product 1 here. Place some text for the Product 1 here. Place some text for the Product 1 here. Place some text for the Product 1 here.</p>
                    </div>
                    <div class="card-footer bg-danger text-right text-danger">
                        <a href="#" class="btn btn-outline-light btn-sm">Buy Now</a> <a href="#" class="btn btn-outline-light btn-sm">More info</a>
                    </div>
                </div>
            <?php
            }
            ?>
            <!-- <div class="card text-dark bg-light mr-1">
                <img class="card-img-top" src="images/products/p2.png" alt="image alt text here">
                <div class="card-body ">
                    <h5 class="card-title">Product Name 3</h5>
                    <p class="card-text text-left">Place some text for the Product 1 here. Place some text for the Product 1 here. Place some text for the Product 1 here. Place some text for the Product 1 here. Place some text for the Product 1 here.</p>
                </div>
                <div class="card-footer bg-success text-right text-danger">
                    <a href="#" class="btn btn-outline-light btn-sm">Buy Now</a> <a href="#" class="btn btn-outline-light btn-sm">More info</a>
                </div>
            </div> -->
        </div>
</div>
</div>
<?php require_once('./tests/views/layouts/footer.php') ?>;