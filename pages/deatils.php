<?php include 'includes/header.php'; ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-body">
                    <div class="xzoom-container">
                        <img class="xzoom" id="xzoom-default" src="assets/img/<?php echo $singleproduct['image']; ?>" xoriginal="assets/img/<?php echo $singleproduct['image']; ?>" />
                        <div class="xzoom-thumbs">
                            <a href="assets/img/<?php echo $singleproduct['image']; ?>"><img class="xzoom-gallery" width="80" src="assets/img/<?php echo $singleproduct['image']; ?>"  xpreview="assets/img/<?php echo $singleproduct['image']; ?>" title="<?php echo $singleproduct['tittle']; ?>"></a>
                            <a href="assets/img/<?php echo $singleproduct['image']; ?>"><img class="xzoom-gallery" width="80" src="assets/img/<?php echo $singleproduct['image']; ?>" title="<?php echo $singleproduct['tittle']; ?>"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-body">
                    <h1><?php echo $singleproduct['name']; ?></h1>
                    <p>Category Name : iphone</p>
                    <p> Brand Name : Apple</p>
                    <hr/>
                    <h3>Tk. <?php echo $singleproduct['price']; ?></h3>
                    <hr/>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto debitis libero nam quod
                        ratione. Est facere incidunt ipsam iure laborum, magni repellendus voluptatem! Accusantium
                        assumenda dicta, dolorem ipsa molestias quas.</p>
                    <hr/>
                    <div>
                        <input type="number" class="form-control" value="1" min="1">
                    </div>
                    <div class="mt-3">
                        <input type="button" class="btn btn-success px-5" value="Add to Cart">
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="card card-body">
                        <p class="bg-secondary text-white text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias consequatur culpa eaque
                            eligendi harum in incidunt itaque nam necessitatibus numquam obcaecati quis, recusandae
                            repellendus sint temporibus ullam unde veritatis voluptates.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias consequatur culpa eaque
                            eligendi harum in incidunt itaque nam necessitatibus numquam obcaecati quis, recusandae
                            repellendus sint temporibus ullam unde veritatis voluptates.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias consequatur culpa eaque
                            eligendi harum in incidunt itaque nam necessitatibus numquam obcaecati quis, recusandae
                            repellendus sint temporibus ullam unde veritatis voluptates.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias consequatur culpa eaque
                            eligendi harum in incidunt itaque nam necessitatibus numquam obcaecati quis, recusandae
                            repellendus sint temporibus ullam unde veritatis voluptates.
                        </p>
                        <p class="bg-danger text-white text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias consequatur culpa eaque
                            eligendi harum in incidunt itaque nam necessitatibus numquam obcaecati quis, recusandae
                            repellendus sint temporibus ullam unde veritatis voluptates.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias consequatur culpa eaque
                            eligendi harum in incidunt itaque nam necessitatibus numquam obcaecati quis, recusandae
                            repellendus sint temporibus ullam unde veritatis voluptates.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias consequatur culpa eaque
                            eligendi harum in incidunt itaque nam necessitatibus numquam obcaecati quis, recusandae
                            repellendus sint temporibus ullam unde veritatis voluptates.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias consequatur culpa eaque
                            eligendi harum in incidunt itaque nam necessitatibus numquam obcaecati quis, recusandae
                            repellendus sint temporibus ullam unde veritatis voluptates.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
