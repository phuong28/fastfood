<?php require_once('app/Models/Category.php'); ?>
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span> THỰC ĐƠN</span>
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
                                <input type="text" placeholder="Bạn muốn tìm kiếm món nào">
                                <button type="submit" class="site-btn">Tìm kiếm</button>
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
                    <div class="hero__item set-bg" data-setbg="<?php echo asset('assets/web/img/hero/fast-food-la-gi-1.jpg')?>">
                        <div class="hero__text">
                            <span>FAST FOOD</span>
                            <h2 style="color: blanchedalmond;">Đồ ăn nhanh <br />Không chất bảo quản</h2>
                            <p style="color: beige;">Đồ ăn sạch Dịch vụ vận chuyển nhanh</p>
                            <a href="#" class="primary-btn">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>