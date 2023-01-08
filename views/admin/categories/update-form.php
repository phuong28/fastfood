<?php require_once('app/Models/Category.php') ?>
<?php include_once('views/admin/layouts/index.php')?>

<?php startblock('content') ?>
    <div class="content">
            <?php include('views/admin/layouts/includes/navbar.php') ?>

            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <?php
                        $id = $_GET['id'];
                        $this_category = new Category();
                        $category = $this_category->find($id)->hydrate();
                    ?>
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <form action="<?php echo url("admin/categories/update", ['id' => $id]) ?>" method="POST" enctype="multipart/form-data" style="text-align:center">
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Tên thực đơn</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $category->name; ?>">
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <label for="slug" class="col-sm-2 col-form-label">Mô tả</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="slug" name="slug" value="<?php echo $category->slug; ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="floatingInput" class="col-sm-2 col-form-label">Ảnh mô tả</label>
                                    <input type="file" class="form-group col-sm-10" id="floatingInput" name="upload"
                                        placeholder="name@example.com">
                                    
                                </div>
                                <a href='<?php echo url('admin/categories') ?>'; class="btn btn-primary w-25">Hủy</a>
                                <button type="submit" class="btn btn-primary w-25">Cập nhật</button>
                            </form>

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
