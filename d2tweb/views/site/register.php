<div class="grid">
    <div class="row">
        <div class="span8">
            <div class="grid">
                <div class="row">
                    <div class="span4">
                        <div class="tile double image-slider bg-color-yellow" data-param-duration="2000" data-param-period="3000" data-role="tile-slider">
                            <div class="tile-content">
                                <img alt="" src="<?php echo img_url(); ?>/5.jpg" />
                            </div>
                            <div class="tile-content">
                                <div class="padding10">
                                    <h2>tina@live.com</h2>
                                    <h5>Re: Wedding Annoucement!</h5>
                                    <p>
                                        Huh! Waw!!! I'm really excited to celebrate with you all. Thanks for...
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="span4">
                        <div class="tile double bg-color-green">
                            <div class="tile-content">
                                <h2>mattberg@live.com</h2>
                                <h5>Re: Wedding Annoucement!</h5>
                                <p>
                                    Congratulations! I'm really excited to celebrate with you all. Thanks for...
                                </p>
                            </div>
                            <div class="brand">
                                <div class="badge">12</div>
                                <img src="<?php echo img_url(); ?>/Mail128.png" class="icon" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="tile double bg-color-blueDark">
                        <div class="tile-content">
                            <img class="place-left" src="<?php echo img_url(); ?>/michael.jpg" />
                            <h3 style="margin-bottom: 5px;">michael_angiulo</h3>
                            <p>
                                I just saw Thor last night. It was awesome! I think you'd love it.
                                </p><h5>RT @julie_green</h5>
                            <p></p>
                        </div>
                        <div class="brand">
                            <span class="name">Tweet@rama</span>
                        </div>
                    </div>

                    <div class="span4">
                        <div class="tile double image-set">
                            <div class="tile-content">
                                <img alt="" src="<?php echo img_url(); ?>/1.jpg" />
                            </div>
                            <div class="tile-content">
                                <img alt="" src="<?php echo img_url(); ?>/2.jpg" />
                            </div>
                            <div class="tile-content">
                                <img alt="" src="<?php echo img_url(); ?>/3.jpg" />
                            </div>
                            <div class="tile-content">
                                <img alt="" src="<?php echo img_url(); ?>/4.jpg" />
                            </div>
                            <div class="tile-content">
                                <img alt="" src="<?php echo img_url(); ?>/5.jpg" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="span4">
                        <div class="tile double image">
                        <div class="tile-content">
                            <img alt="" src="<?php echo img_url(); ?>/4.jpg" />
                        </div>
                        <div class="brand bg-color-orange">
                            <img src="<?php echo img_url(); ?>/Rss128.png" class="icon" />
                            <p class="text">This is a desert eagle. He is very hungry and angry bird.</p>
                            <div class="badge">10</div>
                        </div>
                    </div>
                    </div>

                    <div class="span2">
                        <div class="tile bg-color-green icon selected">
                            <b class="check"></b>
                            <div class="tile-content">
                                <img src="<?php echo img_url(); ?>/Market128.png" />
                            </div>
                            <div class="brand">
                                <span class="name">Store</span>
                                <span class="badge">6</span>
                            </div>
                        </div>
                    </div>
                    <div class="span2">
                        <div class="tile bg-color-red icon selected">
                            <div class="tile-content">
                                <img alt="" src="<?php echo img_url(); ?>/Music128.png" />
                            </div>
                            <div class="brand">
                                <span class="name">Music</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form id="frmRegister" class="span4" method="post" action="register">
            <h2>Đăng ký</h2>
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
    </div>
</div>