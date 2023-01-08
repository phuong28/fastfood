<?php require_once('app/Models/Category.php'); ?>
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Thực đơn</span>
                        </div>
                        <ul>
                            <?php 
								$category = new Category(); 
								$categories = $category->findAll()->get();
                                
							?>
							<?php foreach($categories as $category): ?>
								<li><a href="<?php echo url("categories/show-products/".$category['slug']) ?>"><?php echo $category['name'];?></a></li> 
							<?php endforeach?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    Thực đơn
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="Bạn muốn tìm kiếm thực đơn nào?">
                                <button type="submit" class="site-btn">TÌM KIẾM</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+65 11.188.888</h5>
                                <span>Hỗ trợ 24/7</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>