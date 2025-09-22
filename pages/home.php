<?php include 'includes/header.php'; ?>

    <!--slider tag-->

    <div class="carousel slide" data-bs-ride="carousel" data-bs-interval="1800" id="slider">
        <ol class="carousel-indicators">
            <?php foreach ($sliders as $key => $slider) {?>
            <li data-bs-target="#slider" data-bs-slide-to="<?php echo $key; ?>" class="<?php echo($key == 0) ? 'active' : ''; ?>"></li>
<!--            <li data-bs-target="#slider" data-bs-slide-to="1"></li>-->
<!--            <li data-bs-target="#slider" data-bs-slide-to="2"></li>-->
    <?php }?>
        </ol>

        <div class="carousel-inner">
    <?php foreach ($sliders as $key1 => $slider) {?>
            <div class="carousel-item<?php echo($key1 == 0) ? 'active' : ''; ?>">
                <img src="assets/img/<?php echo $slider['image']; ?>" alt="nature img" class="w-100 h-500"/>
                <div class="carousel-caption my-caption">
                    <h1><?php echo $slider['name']; ?></h1>
                    <p><?php echo $slider['para']; ?></p>
                    <a href="" class="btn btn-success"><?php echo $slider['button']; ?></a>
                </div>
            </div>
    <?php }?>

<!--            <div class="carousel-item">-->
<!--                <img src="assets/img/nature.jpg" alt="nature img" class="w-100 h-500"/>-->
<!--                <div class="carousel-caption my-caption">-->
<!--                    <h1>This is a carousel Two</h1>-->
<!--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab architecto incidunt laudantium-->
<!--                        perspiciatis rerum similique suscipit temporibus, veniam vitae voluptatem? Aliquam aperiam,-->
<!--                        architecto at dolore eligendi est harum placeat sunt?</p>-->
<!--                    <a href="" class="btn btn-success">Deatils</a>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div class="carousel-item">-->
<!--                <img src="assets/img/nature2.jpg" alt="nature img" class="w-100 h-500"/>-->
<!--                <div class="carousel-caption my-caption">-->
<!--                    <h1>This is a carousel Three</h1>-->
<!--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab architecto incidunt laudantium-->
<!--                        perspiciatis rerum similique suscipit temporibus, veniam vitae voluptatem? Aliquam aperiam,-->
<!--                        architecto at dolore eligendi est harum placeat sunt?</p>-->
<!--                    <a href="" class="btn btn-success">Deatils</a>-->
<!--                </div>-->
<!--            </div>-->

        </div>
        <a href="#slider" class="carousel-control-prev" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#slider" class="carousel-control-next" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <!--section tag-->
    <section class="py-5">
        <div class="container">
            <div class="row">

                <?php foreach ($contentss as $content) {?>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <?php echo $content['name']; ?>
                        </div>
                        <div class="card-body">
                            <b><?php echo $content['body']; ?></b><hr/>
                            <p>                                 <?php echo $content['para']; ?></p>
                        </div>
                        <div class="card-footer">
                            <?php echo $content['footer']; ?>
                        </div>
                    </div>
                </div>
    <?php }?>

<!--                <div class="col-md-4">-->
<!--                    <div class="card">-->
<!--                        <div class="card-header">-->
<!--                            This is a card header-->
<!--                        </div>-->
<!--                        <div class="card-body">-->
<!--                            This is a heading tag-->
<!--                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo maiores, neque?-->
<!--                                Corporis-->
<!--                                iusto laudantium, modi perferendis praesentium quidem tempora totam. Excepturi quam,-->
<!--                                sapiente. Adipisci aut inventore molestiae non totam, vitae.</p>-->
<!---->
<!--                        </div>-->
<!--                        <div class="card-footer">-->
<!--                            This is a card footer-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="col-md-4">-->
<!--                    <div class="card">-->
<!--                        <div class="card-header">-->
<!--                            This is a card header-->
<!--                        </div>-->
<!--                        <div class="card-body">-->
<!--                            This is a heading tag-->
<!--                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo maiores, neque?-->
<!--                                Corporis-->
<!--                                iusto laudantium, modi perferendis praesentium quidem tempora totam. Excepturi quam,-->
<!--                                sapiente. Adipisci aut inventore molestiae non totam, vitae.</p>-->
<!---->
<!--                        </div>-->
<!--                        <div class="card-footer">-->
<!--                            This is a card footer-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </div>
    </section>
    <!--cart tag-->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">

                <?php foreach ($products as $product) {?>
                    <div class="col-md-3">
                        <div class="card">
                            <img src="assets/img/<?php echo $product['image']; ?>" alt="" class="h-250">
                            <div class="card-body">
                                <h5><?php echo $product['name']; ?></h5>
                                <h5><?php echo $product['price']; ?></h5>
                                <hr/>
                                <a href="action.php?page=deatils&id=<?php echo $product['id']; ?>" class="btn btn-success">Deatils</a>
                            </div>
                        </div>
                    </div>

                <?php }?>

                <!--            <div class="col-md-3">-->
                <!--                <div class="card">-->
                <!--                    <img src="assets/img/shari.jpg" alt="" class="h-250">-->
                <!--                    <div class="card-body">-->
                <!--                        <h5>Product Name</h5>-->
                <!--                        <p>Tk. 2500</p>-->
                <!--                        <hr/>-->
                <!--                        <a href="" class="btn btn-success">Deatils</a>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div>-->
                <!---->
                <!--            <div class="col-md-3">-->
                <!--                <div class="card">-->
                <!--                    <img src="assets/img/iphone.jpg" alt="" class="h-250">-->
                <!--                    <div class="card-body">-->
                <!--                        <h5>Product Name</h5>-->
                <!--                        <p>Tk. 9500</p>-->
                <!--                        <hr/>-->
                <!--                        <a href="" class="btn btn-success">Deatils</a>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div>-->
                <!---->
                <!--            <div class="col-md-3">-->
                <!--                <div class="card">-->
                <!--                    <img src="assets/img/car.jpg" alt="" class="h-250">-->
                <!--                    <div class="card-body">-->
                <!--                        <h5>Product Name</h5>-->
                <!--                        <p>Tk. 2006500</p>-->
                <!--                        <hr/>-->
                <!--                        <a href="" class="btn btn-success">Deatils</a>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div>-->
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>