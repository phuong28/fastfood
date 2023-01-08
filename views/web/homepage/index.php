<?php include_once('views/web/layouts/app.php');?>

<?php startblock('hero') ?>
    <section class="hero">
        <?php include('views/web/layouts/includes/hero.php') ?>
    </section>
<?php endblock('') ?>

<?php startblock('slider') ?>
    <?php include('views/web/includes/slider.php') ?>
<?php endblock('') ?>

<?php startblock('content')?>
    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured Products</h2>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <?php
                    $product = new Product();
                    $products = $product->findAll()->hydrate();
                ?>
                <?php foreach($products as $product): ?>
                
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <?php include('views/web/includes/product.php') ?>
                    </div> 
                <?php endforeach ?>
            </div>
        </div>
        
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="<?php echo asset('assets/web/img/banner/banner-1.jpg')?>" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="<?php echo asset('assets/web/img/banner/banner-2.jpg')?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    
    <!-- Latest Product Section End -->

<?php endblock('') ?>