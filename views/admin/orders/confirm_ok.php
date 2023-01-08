<?php require_once('app/Models/Order.php'); ?>
<?php include_once('views/admin/layouts/index.php')?>

<?php startblock('content') ?>
    <div class="content">
            <?php include('views/admin/layouts/includes/navbar.php') ?>

            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            
                            <h3 class="mb-4 mt-4">Danh sách chờ giao hàng</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Mã Order</th>
                                            <th scope="col">Mã người dùng</th>
                                            <th scope="col">Tên người đặt</th>
                                            <th scope="col">Số điện thoại</th>
                                            <th scope="col">Địa chỉ</th>
                                            <th scope="col">Ghi chú</th>
                                            <th scope="col">Giá thành</th>
                                            <th scope="col">Hình thức thanh toán</th>
                                            <th scope="col">Đã xác nhận</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $order = new Order(); 
                                        // $orders = $order->findAll()->get();
                                        // where(['email' => $_POST['email'], 'password' => md5($_POST['password'])])
                                        $orders=$order->where(['status'=> 1])->get();

                                    ?>
                                        <tr>
                                        <?php foreach($orders as $order): ?>
                                            <tr>
                                                <th scope="row"><?php echo $order['order_id']; ?></th>
                                                <td><?php echo $order['user_id']; ?></td>
                                                <td><?php echo $order['receiver_name']; ?></td>
                                                <td><?php echo $order['phone_number']; ?></td>
                                                <td><?php echo $order['address']; ?></td>
                                                <td><?php echo $order['order_note']; ?></td>
                                                <td><?php echo $order['subtotal'] ?></td>
                                                <td style="text-align:center"><?php echo $order['payment_type']; ?></td>
                                                <?php if($order['status']==1): ?>
                                                    <td>
                                                        <a href="#"><button class="btn btn-sm btn-success">Đã xác nhận</button></a>
                                                    </td>
                                                <?php endif ?>
                                            </tr>
                                        <?php endforeach ?>
                                        </tr>
        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table End -->


            
            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="<?php echo url("homepage/index") ?>">Ogani Shop</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
    </div>
<?php endblock()?>
