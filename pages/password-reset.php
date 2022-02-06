<?php include "header.php"; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">

                <div class="card">
                    <div class="card-header">
                        PASSWORD GENERATOR
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="POST">

                            <div class="form-group row">        <!--  Form Group starts here  -->
                                <label for="" class="col-md-3 col-form-label">Password Length</label>
                                <div class="col-md-9">
                                    <input type="text" name="password_length" id="" class="form-control" value="<?php echo isset($newPassword['length'])?$newPassword['length']:''?>">
                                </div>
                            </div>      <!--  Form Group starts here  -->

                            <div class="form-group row">        <!--  Form Group starts here  -->
                                <label for="" class="col-md-3 col-form-label">Your Password</label>
                                <div class="col-md-9">
                                    <input type="text" name="" id="" class="form-control" value="<?php echo isset($newPassword['password'])? $newPassword['password'] : '' ?> ">
                                </div>
                            </div>      <!--  Form Group starts here  -->

                            <div class="form-group row">        <!--  Form Group starts here  -->
                                <label for="" class="col-md-3 col-form-label"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="btn" id="" class="btn btn-outline-success">
                                </div>
                            </div>      <!--  Form Group starts here  -->

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php include "footer.php"; ?>
