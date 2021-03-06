<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, maximum-scale=1" />

    <title><?php echo $title; ?></title>
    
    <?php echo css_url('modern.css', true); ?>
    <?php echo css_url('modern-responsive.css', true); ?>
    <?php echo css_url('site.css', true); ?>
    <link href="<?php echo js_url(); ?>/google-code-prettify/prettify.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="<?php echo js_url(); ?>/assets/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="<?php echo js_url(); ?>/assets/jquery.mousewheel.min.js"></script>
    <script type="text/javascript" src="<?php echo js_url(); ?>/assets/jquery.validate.js"></script>
    
    <script type="text/javascript" src="<?php echo js_url(); ?>/jqueryui/jquery-ui-1.10.2.custom.min.js"></script>
    <link href="<?php echo js_url(); ?>/jqueryui/jquery-ui-1.10.2.custom.min.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="<?php echo js_url(); ?>/modern/dropdown.js"></script>
    <script type="text/javascript" src="<?php echo js_url(); ?>/modern/accordion.js"></script>
    <script type="text/javascript" src="<?php echo js_url(); ?>/modern/buttonset.js"></script>
    <script type="text/javascript" src="<?php echo js_url(); ?>/modern/carousel.js"></script>
    <script type="text/javascript" src="<?php echo js_url(); ?>/modern/input-control.js"></script>
    <script type="text/javascript" src="<?php echo js_url(); ?>/modern/pagecontrol.js"></script>
    <script type="text/javascript" src="<?php echo js_url(); ?>/modern/rating.js"></script>
    <script type="text/javascript" src="<?php echo js_url(); ?>/modern/slider.js"></script>
    <script type="text/javascript" src="<?php echo js_url(); ?>/modern/tile-slider.js"></script>
    <script type="text/javascript" src="<?php echo js_url(); ?>/modern/tile-drag.js"></script>
    <script type="text/javascript" src="<?php echo js_url(); ?>/modern/dialog.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function(){
            $('#staticDialog').click(function(e) {
                $.Dialog({
                    'title'      : 'My static dialog',
                    'content'    : 'This content can be in HTML.<br />You can add custom function to your buttons!<br /><br /><b>Features:</b><ul><li>Easy to use!</li><li>Customizable</li><li>Powerful!</li></ul>',
                    'buttons'    : {
                        'Ok'    : {
                            'action': function(){}
                        },
                        'Cancel'     : {
                            'action': function(){}
                        }
                    }
                });
            });
            $('#draggableDialog').click(function(e) {
                $.Dialog({
                    'title'      : 'My draggable dialog',
                    'content'    : 'This content can be in HTML.<br />You can add custom function to your buttons!<br /><br /><b>Features:</b><ul><li>Easy to use!</li><li>Customizable</li><li>Powerful!</li></ul>',
                    'draggable'  : true,
                    'buttonsAlign': 'right',
                    'buttons'    : {
                        'Ok'    : {
                            'action': function(){}
                        }
                    }
                });
            });
        });
    </script>

</head>

<body class="modern-ui" onload="prettyPrint()">
<header id="header" class="nav-bar bg-color-red">
    <div class="span12" style="margin: 0px auto;">
        <div class="nav-bar-inner padding10">
            <span class="pull-menu"></span>
    
            <a href="<?php echo base_url('site/index');?>"><span class="element brand">
                <img class="place-left" src="<?php echo img_url(); ?>/logo32.png" style="height: 20px"/>
                Hotel Manager <small>v.1</small>
            </span></a>
    
            <div class="divider"></div>
    
            <ul class="menu">
                <?php if(strstr(uri_string(), '/', true) == 'site'): ?>
                    <li><?php echo anchor('site/index', 'Trang chủ'); ?></li>
                    <li><?php echo anchor('site/about', 'Giới thiệu'); ?></li>
                    <li><?php echo anchor('site/feature', 'Tính năng'); ?></li>
                    <li><?php echo anchor('site/price', 'Bảng giá'); ?></li>
                    <li><?php echo anchor('site/contect', 'Liên hệ'); ?></li>
                <?php else: ?>
                    <li><?php echo anchor('home/index', 'Trang chủ'); ?></li>
                    <li><?php echo anchor('room/index', 'Quản lý phòng'); ?></li>
                    <li><?php echo anchor('site/index', 'Nhân viên'); ?></li>
                    <li><?php echo anchor('site/index', 'Thống kê'); ?></li>
                    <li><?php echo anchor('info/index', 'Thông tin'); ?></li>
                <?php endif; ?>
            </ul>
            
            <ul class="menu">
                <?php if(!$this->session->userdata('username')): ?>
                    <li style="padding-top: 3px; float: right;">
                        <a href="<?php echo base_url('login')?>"><i class="icon-user fg-color-white"></i> Đăng nhập</a>
                    </li>
                <?php else: ?>
                    <li data-role="dropdown" style="padding-top: 3px; float: right;">
                        <a href="#"><i class="icon-user fg-color-white"></i><?php echo ' '.$this->session->userdata('username'); ?></a>
                        <ul class="dropdown-menu">
                            <li><?php echo anchor('home/index', '<i class="icon-grid"></i> Quản lý</a>') ?></li>
                            <li><a href="#"><i class="icon-cog"></i> Cài đặt</a></li>
                            <li class="divider"></li>
                            <li><?php echo anchor('site/logout', '<i class="icon-switch"></i> Thoát'); ?></li>
                        </ul>
                    </li>
                <?php endif; ?>
            </ul>
                
        </div>
    </div>
</header><!-- end#header -->
<section id="index" class="page">
    <?php echo $content; ?>
</section><!-- end section -->
<footer id="footer" class="page">
    <div class="nav-bar bg-color-red">
        <div class="nav-bar-inner padding10">
            <span class="element">
                2012-2013, Phần mềm quản lý khách sạn &copy; bởi <a href="d2tweb.net" class="fg-color-white">trongdd - hubt</a>
            </span>
        </div>
    </div>
</footer><!-- end#footer -->
</body>
</html>