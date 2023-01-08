<?php require_once('views/web/layouts/app.php') ?>
<?php require_once('core/Flash.php') ?>

<?php startblock('hero') ?>
  <?php include('views/web/layouts/includes/hero1.php') ?>
<?php endblock('') ?>

<?php startblock('content') ?>
<div class="container-fluid pt-5">
  <div class="text-center mb-4"><span>ĐĂNG NHẬP</span></h2>
  </div>
  <div class="row px-xl-5 mb-5">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
      <div class="contact-form">
        <?php if(Flash::has('error')) {?>
          <div id="success" class="alert alert-danger" role="alert"><?php echo Flash::get('error') ?> </div>
        <?php } ?>
        <form name="sendMessage" id="contactForm" action="<?php echo url('Authentication/login') ?>" method="POST">

          <div class="control-group">
            <input type="email" class="form-control" name="email" placeholder="Nhập địa chỉ email"  />
            <?php if (isset($errors['email'])) { ?>
              <p class="help-block text-danger"><?php echo $errors['email'] ?></p>
            <?php } else { ?>
              <p></p>
            <?php } ?>
          </div>

          <div class="control-group">
            <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu"  />
            <?php if (isset($errors['password'])) { ?>
              <p class="help-block text-danger"><?php echo $errors['password'] ?></p>
            <?php } else { ?>
              <p></p>
            <?php } ?>
          </div>

          <div style="display:flex;">
            <input type="checkbox" name="remember_me" id="keep_me_in" style="width:10%; height:25px"/>
            <label for="keep_me_in">Nhớ tài khoản</label>
          </div>  
          <div class="mb-3">
            <button class="btn btn-primary py-2 px-4" type="submit" name="login">Đăng nhập</button>
          </div>
          <div>
            <p>Bạn chưa có tài khoản</p>
            <button class="btn btn-primary py-2 px-4" type="submit" name="register">Đăng ký</button>
          </div>
        </form>
      </div>
    </div>
    <div class="col-lg-3"></div>
  </div>

</div>

<?php endblock() ?>