<?php require_once('app/Models/Product.php') ?>
<?php require_once('app/Models/Category.php') ?>
<?php include_once('views/admin/layouts/index.php')?>

<?php startblock('content') ?>
    <div class="content">
            <?php include('views/admin/layouts/includes/navbar.php') ?>

            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <?php 
                                $id = $_GET['id'];
                                $thisProduct = new Product();
                                $product = $thisProduct->find($id)->hydrate();
                            ?>
                            <form action="<?php echo url("admin/products/update", ['id' => $id]) ?>" method="POST" enctype="multipart/form-data" style="text-align:center">
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Tên món ăn</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $product->name ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="description" class="col-sm-2 col-form-label">Mô tả</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="descrption" name="description" value="<?php echo $product->description ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="rate" class="col-sm-2 col-form-label">Số lượng</label>
                                    <div class="col-sm-10">
                                        <input type="number" step="1" class="form-control" id="rate" name="quantity" value="<?php echo $product->quantity ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="price" class="col-sm-2 col-form-label">Giá một suất</label>
                                    <div class="col-sm-10">
                                        <input type="number" step="1000" class="form-control" id="price" name="price" value="<?php echo $product->price; ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="floatingInput" class="col-sm-2 col-form-label">Ảnh mô tả</label>
                                    <input type="file" class="form-group col-sm-10" id="floatingInput" name="upload">
                                </div>
                                <div class="row mb-3">
                                    <label for="in_category" class="col-sm-2 col-form-label">Thuộc danh mục</label>
                                    <select style="width: 82%;" class="form-select col-sm-10" id="in_category" name="category_id">
                                        <option selected value="<?php echo $product->category_id ?>"><?php echo $product->category_id ?></option>
                                        <?php
                                            $category = new Category();
                                            $categories = $category->findAll()->hydrate();
                                        ?>
                                        <?php foreach($categories as $category): ?>
                                            <option value="<?php echo $category->category_id ?>"><?php echo $category->category_id ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <a href='<?php echo url('admin/products') ?>'; class="btn btn-primary w-25">Hủy</a>
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
