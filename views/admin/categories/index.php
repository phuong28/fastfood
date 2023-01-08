<?php require_once('app/Models/Category.php'); ?>
<?php include_once('views/admin/layouts/index.php')?>

<?php startblock('content') ?>
    <div class="content">
            <?php include('views/admin/layouts/includes/navbar.php') ?>

            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <div >
                                <a href="<?php echo url('admin/categories/showCreateForm') ?>"><button type="button" class="btn btn-lg btn-outline-dark m-2">Thêm thực đơn mới</button></a>
                            </div>
                            <h3 class="mb-4 mt-4">THỰC ĐƠN</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Tên thực đơn</th>
                                            <th scope="col">Mô tả</th>
                                            <th scope="col">Ảnh mô tả</th>
                                            <th scope="col" style="width: 15%;">Hành Động</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $category = new Category(); 
                                        $categories = $category->findAll()->hydrate();
                                    ?>
                                        <tr>
                                        <?php foreach($categories as $category): ?>
                                            <tr>
                                                <th scope="row"><?php echo $category->category_id; ?></th>
                                                <td><?php echo $category->name; ?></td>
                                                <td><?php echo $category->slug; ?></td>
                                                <td><img src="<?php echo asset("storage/{$category->image}"); ?>" alt="There's no image" style="width:100px;height:60px;"></td>
                                                <td>
                                                    <a href="<?php echo url("admin/categories/showUpdateForm", ['id' => $category->category_id]) ?>"><button class="btn btn-sm btn-warning">Sửa</button></a>
                                                    <a href="<?php echo url("admin/categories/delete", ['id' => $category->category_id]) ?>" onclick="return confirm('Bạn chắc chắc muốn xóa?')"><button class="btn btn-sm btn-danger">Xóa</button></a>
                                                </td>
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
                            &copy; <a href="<?php echo url("homepage/index") ?>">Fast Food</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By Thanh Hương <a href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
    </div>
<?php endblock()?>
