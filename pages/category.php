<?php include 'includes/header.php'; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">All Category</div>
                    <div class="card-body">
                        <div class="list-group">
                            <a href="" class="list-group-item">Category One</a>
                            <a href="" class="list-group-item">Category Two</a>
                            <a href="" class="list-group-item">Category Three</a>
                        </div>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-header">Search By Price</div>
                    <div class="card-body">
                        <div class="list-group">
                            <a href="" class="list-group-item">0 to 1000</a>
                            <a href="" class="list-group-item">1000 to 3000</a>
                            <a href="" class="list-group-item">3000 to 5000</a>
                        </div>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-header">All Brands</div>
                    <div class="card-body">
                        <div class="list-group">
                            <a href="" class="list-group-item">Sony</a>
                            <a href="" class="list-group-item">SamSung</a>
                            <a href="" class="list-group-item">Apple</a>
                            <a href="" class="list-group-item">Walton</a>
                            <a href="" class="list-group-item">Asus</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <?php foreach ($products as $product) {?>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="assets/img/<?php echo $product['image']; ?>" alt="" class="h-250">
                            <div class="card-body">
                                <h5><?php echo $product['name']; ?></h5>
                                <p>Tk.                                       <?php echo $product['price']; ?></p>
                                <hr/>
                                <a href="action.php?page=deatils&id=<?php echo $product['id']; ?>" class="btn btn-success">Deatils</a>
                            </div>
                        </div>
                    </div>
    <?php }?>

<!--                    <div class="col-md-4">-->
<!--                        <div class="card">-->
<!--                            <img src="assets/img/iphone1.jpg" alt="" class="h-250">-->
<!--                            <div class="card-body">-->
<!--                                <h5>Product Name</h5>-->
<!--                                <p>Tk. 95000</p>-->
<!--                                <hr/>-->
<!--                                <a href="action.php?page=deatils" class="btn btn-success">Deatils</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="col-md-4">-->
<!--                        <div class="card">-->
<!--                            <img src="assets/img/iphone1.jpg" alt="" class="h-250">-->
<!--                            <div class="card-body">-->
<!--                                <h5>Product Name</h5>-->
<!--                                <p>Tk. 95000</p>-->
<!--                                <hr/>-->
<!--                                <a href="action.php?page=deatils" class="btn btn-success">Deatils</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="col-md-4 mt-4">-->
<!--                        <div class="card">-->
<!--                            <img src="assets/img/iphone1.jpg" alt="" class="h-250">-->
<!--                            <div class="card-body">-->
<!--                                <h5>Product Name</h5>-->
<!--                                <p>Tk. 95000</p>-->
<!--                                <hr/>-->
<!--                                <a href="action.php?page=deatils" class="btn btn-success">Deatils</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="col-md-4 mt-4">-->
<!--                        <div class="card">-->
<!--                            <img src="assets/img/iphone1.jpg" alt="" class="h-250">-->
<!--                            <div class="card-body">-->
<!--                                <h5>Product Name</h5>-->
<!--                                <p>Tk. 95000</p>-->
<!--                                <hr/>-->
<!--                                <a href="action.php?page=deatils" class="btn btn-success">Deatils</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="col-md-4 mt-4">-->
<!--                        <div class="card">-->
<!--                            <img src="assets/img/iphone1.jpg" alt="" class="h-250">-->
<!--                            <div class="card-body">-->
<!--                                <h5>Product Name</h5>-->
<!--                                <p>Tk. 95000</p>-->
<!--                                <hr/>-->
<!--                                <a href="action.php?page=deatils" class="btn btn-success">Deatils</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'includes/footer.php'; ?>