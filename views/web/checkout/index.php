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
                    <h2>Kiểm tra</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.html">Trang chủ</a>
                        <span>Kiểm tra</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">

        <div class="checkout__form">
            <h4>Thông tin hóa đơn</h4>
            <form action="<?php echo url('order/create') ?>" method="POST">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="checkout__input">
                                    <p>Tên người nhận<span>*</span></p>
                                    <input type="text" name="receiver_name">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="checkout__input">
                                    <p>Số điện thoại<span>*</span></p>
                                    <input type="text" name="phone_number">
                                </div>
                            </div>

                        </div>

                        <div class="checkout__input">
                            <p>Địa chỉ<span>*</span></p>
                            <input type="text" name="address" class="checkout__input__add">

                        </div>

                        <div class="checkout__input">
                            <p>Ghi chú<span>*</span></p>
                            <input type="text" name="order_note"
                                placeholder="Ghi chú khi giao hàng">
                        </div>
                    </div>

                </div>
                <div class="col-lg-12">
                    <h2
                        style="border-radius:30px; margin-bottom: 10px;text-align: center; text-decoration:underline; padding: 40px 0; background-color:antiquewhite">
                        Thực đơn bạn đặt
                    </h2>
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Sản phẩm</th>
                                    <th>Tên món</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Tổng thanh toán</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                        $sum = 0;
                                        foreach($cartItems as $key => $cartItem):?>
                                <tr>
                                    <td class="shoping__cart__item" style="width:30%">
                                        <img src="<?php echo asset("storage/{$cartItems[$key]['image']}") ?>" alt="">
                                    </td>
                                    <td>
                                        <h5><?php echo $cartItems[$key]['name'] ?></h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        <?php echo number_format($cartItems[$key]['price'], 0, ".", ",")." VND";?>
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <?php echo $cartItems[$key]['quantity']?>
                                    </td>
                                    <td class="shoping__cart__total">
                                        <?php 
                                                        $cartItemTotalPrice = $cartItems[$key]['price'] * $cartItems[$key]['quantity']; 
                                                        $sum += $cartItemTotalPrice;
                                                ?>
                                        <?php echo number_format($cartItemTotalPrice, 0, ".", ",") ?> VND
                                    </td>

                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">

                        <div class="col-lg-6">

                        </div>
                        <div class="col-lg-6">
                            <div class="shoping__checkout">
                                <h5>Thông tin giỏ hàng</h5>
                                <ul>

                                    <li>Thanh toán <span><?php echo number_format($sum, 0, ".", ",")?> VND</span></li>

                                </ul>
                            </div>
                            <div style="margin-top: 30px;">
                                <select name="payment_type" required="">
                                    <option value="cod">
                                        Thanh toán khi nhận hàng (COD)
                                    </option>
                                    <option value="online">
                                        Thanh toán cổng thanh toán online
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto" style="margin-top: 30px;">
                    <button type="submit" name="order" class="site-btn"
                        style="width: 100%; font-size:20px; border-radius:10px">
                        ĐẶT HÀNG
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- Checkout Section End -->

<?php endblock('content') ?>