
<h2>Đăng ký</h2>
<script type="text/javascript" src="<?php echo js_url() ?>/validation/jquery.validate-register.js"></script>
<form id="frmRegister" class="span4" method="post" action="register">
    <div class="input-control text">
        <input name="full_name" type="text" placeholder="Họ tên" />
        <?php echo form_error('full_name'); ?>
    </div>
    <div class="input-control text">
        <input name="hotel_name" type="text" placeholder="Tên khách sạn" />
        <?php echo form_error('hotel_name'); ?>
    </div>
    <div class="input-control text">
        <input name="mobile" type="text" placeholder="Mobile" />
        <?php echo form_error('mobile'); ?>
    </div>
    <div class="input-control text">
        <input name="phone" type="text" placeholder="Điện thoại" />
        <?php echo form_error('phone'); ?>
    </div>
    <div class="input-control text">
        <input id="email" name="email" type="text" placeholder="Email" />
        <?php echo form_error('email'); ?>
    </div>
    <div class="input-control text">
        <input name="address" type="text" placeholder="Address" />
        <?php echo form_error('address'); ?>
    </div>
    <div class="input-control text">
        <input id="username" name="username" type="text" placeholder="Tài khoản"  />
        <?php echo form_error('username'); ?>
    </div>
    <div class="input-control password">
        <input name="password" type="password" placeholder="Mật khẩu" />
        <?php echo form_error('password'); ?>
    </div>
    <div class="input-control password">
        <input name="passconf" type="password" placeholder="Nhập lại mật khẩu" />
        <?php echo form_error('passconf'); ?>
        <?php echo form_error('passfix'); ?>
    </div>
    <div class="control">
        <input class=" bg-color-red border-color-white" type="submit" value="Đăng ký"/>
        <input class=" bg-color-red border-color-white" type="submit" value="làm lại"/>
    </div>
</form>