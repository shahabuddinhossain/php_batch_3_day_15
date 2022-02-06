<?php include "header.php";?>

    <section class="py-5">
        <div class="container">
            <div class="row"> <!-- row Starts here-->
                <?php foreach ($products as $product) {?>

                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="<?php echo isset($product['image'])? $product['image'] : ''; ?>" alt="" class="card-img-top">
                            <div class="card-body">
                                <h3 class="card-title"><?php echo isset($product['name'])? $product['name'] : ''; ?></h3>
                                <h4><?php echo isset($product['price'])? 'Price: '.$product['price'] : ''; ?></h4>
                                <h5><?php echo isset($product['brand'])? $product['brand'] : ''; ?></h5>
                                <h5><?php echo isset($product['category'])? $product['category'] : ''; ?></h5>
                                <h5><?php echo isset($product['description'])? $product['description'] : ''; ?></h5>
                                <hr/>
                                <a href="action.php?pages=productDetails??id=<?php echo isset($product['id'])? $product['id'] : ''; ?>" class="btn btn-outline-info">More Details</a>
                            </div>
                        </div>
                    </div>

                <?php } ?>
            </div> <!-- row Ends-->
        </div>  <!-- Container Ends-->
    </section>


<?php include "footer.php";?>