<?php require_once('./tests/views/layouts/header.php') ?>;


<div class="container">
    <h2 class="text-center mb-5">Products</h3>

        <!-- <div class="card-group"> -->
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
        <div class="row">
            <?php

            if (count($products) > 0) {

                foreach ($products as $product) {

            ?>
                    <div class="col-md-4 mr-0 mb-3">
                        <div class="card text-dark bg-light mr-1">
                            <img class="card-img-top" src="flight/public/productImages/<?php echo $product->image . '.jpg' ?>" alt="image alt text here">
                            <div class="card-body ">
                                <h5 class="card-title text-center"><?php echo $product->title; ?></h5>
                                <p class="card-text text-left"> <b>Discription</b> &nbsp;<?php echo  $product->discription; ?><br> <b>Price</b> &nbsp; <?php echo $product->price; ?> </p>
                            </div>
                            <div class="card-footer bg-danger text-right text-danger">
                                <button type="button" class="btn btn-outline-light btn-sm" onclick="setSelectedProduct(<?php echo $product->id; ?>)" data-toggle="modal" data-target=".bd-example-modal-lg">Show</button>
                            </div>
                        </div>
                    </div>

                <?php
                }
                ?>
        </div>
    <?php
            } elseif (count($Singleproduct) > 0) {
    ?>
        <div class="card text-dark bg-light mr-1">
            <img class="card-img-top" src="flight/public/productImages/<?php echo $Singleproduct['image'] . '.jpg' ?>" alt="image alt text here">
            <div class="card-body ">
                <h5 class="card-title text-center"><?php echo $Singleproduct['title']; ?></h5>
                <p class="card-text text-left"><b>Discription </b><?php echo $Singleproduct['discription']; ?> <br><b>Price</b>&nbsp; <?php echo $Singleproduct['price']; ?></p>
            </div>
            <div class="card-footer bg-danger text-right text-danger">
                <button type="button" class="btn btn-outline-light btn-sm" onclick="setSelectedProduct(<?php echo $Singleproduct['id']; ?>)" data-toggle="modal" data-target=".bd-example-modal-lg">Show</button>
            </div>
        </div>
    <?php
            }
    ?>
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="text-center">Product Details</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>price</th>
                            <th>Description</th>
                            <th>Image</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
                <!-- <button class="btn btn-outline-light btn-sm">CheckOut</button> -->
            </div>
        </div>
    </div>
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
    <!-- </div> -->
</div>
</div>
<script>
    let url = 'localhost/task1/index.php'

    function setSelectedProduct(product_id) {
        $.ajax({
            url: "index.php", //the page containing php script
            type: "post", //request type,
            dataType: 'json',
            data: {
                registration: "success",
                name: "xyz",
                email: "abc@gmail.com"
            },
            success: function(result) {
                console.log(result.abc);
            }
        });
    }
</script>
<?php require_once('./tests/views/layouts/footer.php') ?>;