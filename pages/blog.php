<?php include "header.php";?>

<section class="py-5">
    <div class="container">
        <div class="row"> <!-- row Starts here-->
            <?php foreach ($blogs as $blog) {?>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="<?php echo isset($blog['image'])? $blog['image'] : ''; ?>" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo isset($blog['title'])? $blog['title'] : ''; ?></h3>
                        <h4><?php echo isset($blog['author'])? $blog['author'] : ''; ?></h4>
                        <hr/>
                        <a href="" class="btn btn-outline-info">Read More</a>
                    </div>
                </div>
            </div>

            <?php } ?>
        </div> <!-- row Ends-->
    </div>  <!-- Container Ends-->
</section>


<?php include "footer.php";?>