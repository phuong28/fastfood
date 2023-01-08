<?php include_once('views/web/layouts/app.php'); ?>

<?php startblock('hero') ?>
    
        <?php include('views/web/layouts/includes/hero1.php') ?>
    
<?php endblock('') ?>

<?php startblock('content') ?>


<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="<?php echo asset('assets/web/img/breadcrumb.jpg') ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Thanh toán giỏ hàng</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.html">Trang chủ</a>
                        <span>Giỏ hàng</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Shoping Cart Section Begin -->
<section class="shoping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th class="shoping__product">Sản phẩm</th>
                                <th>Tên</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Tổng thanh toán</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sum = 0;
                            foreach($cartItems as $key => $cartItem):?>
                            <tr>
                                <td class="shoping__cart__item" style="width:100px; height:80px">
                                    <img src="<?php echo asset("storage/{$cartItems[$key]['image']}") ?>" alt="">
                                    
                                </td>
                                <td>
                                    <h5><?php echo $cartItems[$key]['name'] ?></h5>
                                </td>
                                <td class="shoping__cart__price">
                                    <?php echo number_format($cartItems[$key]['price'], 0, ".", ",")." VND";?>
                                </td>
                                <td class="shoping__cart__quantity">
                                    <form style="text-align: center;" action="<?php echo url("shopcart/modify/$key")?>" method="POST" id="<?php echo $key; ?>">
                                    
                                            <input style="width: 50%;border:none;border-radius:10px;padding: 10px 20px;background-color: #f5f5f5;" onchange="document.getElementById(<?php echo $key; ?>).submit()" type="number" class="quantity update-cart" name="quantity" autocomplete="off" min="1" value="<?php echo $cartItems[$key]['quantity']?>"/>
                                            <input type="hidden" name="update" />
                                            
                                    </form>
                                </td>
                                <td class="shoping__cart__total">
                                    <?php 
                                            $cartItemTotalPrice = $cartItems[$key]['price'] * $cartItems[$key]['quantity']; 
                                            $sum += $cartItemTotalPrice;
                                    ?>
                                    <?php echo number_format($cartItemTotalPrice, 0, ".", ",") ?> VND
                                </td>
                                <td class="shoping__cart__item__close">
                                    <button class="btn btn-light btn-sm remove-from-cart"><a href="<?php echo url("shopcart/delete/{$key}") ?>"><span class="icon_close"></span></a></button>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__btns">
                    <a href="<?php echo url('homepage/index') ?>" class="primary-btn cart-btn">TIẾP TỤC MUA SẮM</a>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- <div class="shoping__continue">
                    <div class="shoping__discount">
                        <h5>Mã giảm giá</h5>
                        <form action="#">
                            <input type="text" placeholder="Hiện mã g">
                            <button type="submit" class="site-btn">Nhập mã</button>
                        </form>
                    </div>
                </div> -->
            </div>
            <div class="col-lg-6">
                <div class="shoping__checkout">
                    <h5>Tổng thanh toán</h5>
                    <ul>
                        <li>Tổng tiền <span><?php echo number_format($sum, 0, ".", ",")?> VND</span></li>
                        <li>Thanh toán <span><?php echo number_format($sum, 0, ".", ",")?> VND</span></li>
                    </ul>
                    <a href="<?php echo url('checkout') ?>" class="primary-btn">ĐẶT ĐỒ VÀ THANH TOÁN</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shoping Cart Section End -->

<?php endblock('content') ?>

<?php startblock('scripts')?>
<script>
    $(function() {
        $(".update-cart").keydown(function(e) {
            //disable minus input
            if (e.which === 189) {
                e.preventDefault();
                // e.target.value = "";
                return false;
            }
        });
    });
</script>
<?php endblock()?>