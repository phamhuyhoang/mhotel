<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, maximum-scale=1" />

    <title>Quản lý phòng khách sạn</title>
    
    <link href="css/modern.css" rel="stylesheet" />
    <link href="css/modern-responsive.css" rel="stylesheet" />
    <link href="css/site.css" rel="stylesheet" type="text/css" />
    <link href="js/google-code-prettify/prettify.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="js/assets/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="js/assets/jquery.mousewheel.min.js"></script>

    <script type="text/javascript" src="js/modern/dropdown.js"></script>
    <script type="text/javascript" src="js/modern/accordion.js"></script>
    <script type="text/javascript" src="js/modern/buttonset.js"></script>
    <script type="text/javascript" src="js/modern/carousel.js"></script>
    <script type="text/javascript" src="js/modern/input-control.js"></script>
    <script type="text/javascript" src="js/modern/pagecontrol.js"></script>
    <script type="text/javascript" src="js/modern/rating.js"></script>
    <script type="text/javascript" src="js/modern/slider.js"></script>
    <script type="text/javascript" src="js/modern/tile-slider.js"></script>
    <script type="text/javascript" src="js/modern/tile-drag.js"></script>
    <script type="text/javascript" src="js/modern/dialog.js"></script>
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
<header class="nav-bar bg-color-red">
    <div class="span12" style="margin: 0px auto;">
        <div class="nav-bar-inner padding10">
            <span class="pull-menu"></span>
    
            <a href="/"><span class="element brand">
                <img class="place-left" src="images/logo32.png" style="height: 20px"/>
                Hotel Manager <small>v.1</small>
            </span></a>
    
            <div class="divider"></div>
    
            <ul class="menu">
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="index.php">Quản lý phòng</a></li>
                <li><a href="index.php">Nhân viên</a></li>
                <li><a href="index.php">Thống kê</a></li>
                <li><a href="index.php">Thông tin</a></li>
            </ul>
    
        </div>
    </div>
</header><!-- end header -->
<section id="page-index" class="page">
    <div class="row">
        <div class="span12">
            <h2>Danh sách phòng</h2>
            <div class="nav-bar room-desc">
                <div class="nav-bar-inner">
                    <ul class="menu">
                        <li><a href=""><span class="square bg-color-blue"></span>Còn trống</a></li>
                        <li><a href=""><span class="square bg-color-red"></span>Đang ở</a></li>
                        <li><a href=""><span class="square bg-color-pink"></span>Đã đặt</a></li>
                        <li><a href=""><span class="square bg-color-yellow"></span>Chưa dọn</a></li>
                        <li><a href=""><span class="square bg-color-darken"></span>Đang hỏng</a></li>
                    </ul>
                    
                    <ul class="menu">
                        <li data-role="dropdown">
                            <a><i class="icon-screen"></i> Kiểu xem</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Rút gọn</a></li>
                                <li><a href="#">Theo tầng</a></li>
                                <li><a href="#">Loại phòng</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row room">
                <button id="staticDialog" class="shortcut">
                    <h3>101</h3>
                    <span class="badge bg-color-pink">4h30</span>
                </button>
                <button id="draggableDialog" class="shortcut">
                    <h3>101</h3>
                    <span class="badge">4h30</span>
                </button>
                <button class="shortcut">
                    <h3>101</h3>
                    <span class="badge bg-color-red">4h30</span>
                </button>
                <button class="shortcut">
                    <h3>101</h3>
                    <span class="badge bg-color-yellow">4h30</span>
                </button>
                <button class="shortcut">
                    <h3>101</h3>
                    <span class="badge">4h30</span>
                </button>
                <button class="shortcut">
                    <h3>101</h3>
                    <span class="badge bg-color-pink">4h30</span>
                </button>
                <button class="shortcut">
                    <h3>101</h3>
                    <span class="badge bg-color-red">4h30</span>
                </button>
                <button class="shortcut">
                    <h3>101</h3>
                    <span class="badge">4h30</span>
                </button>
                <button class="shortcut">
                    <h3>101</h3>
                    <span class="badge">4h30</span>
                </button>
                <button class="shortcut">
                    <h3>101</h3>
                    <span class="badge">4h30</span>
                </button>
                <button class="shortcut">
                    <h3>101</h3>
                    <span class="badge bg-color-red">4h30</span>
                </button>
                <button class="shortcut">
                    <h3>101</h3>
                    <span class="badge">4h30</span>
                </button>
                <button class="shortcut">
                    <h3>101</h3>
                    <span class="badge bg-color-pink">4h30</span>
                </button>
                <button class="shortcut">
                    <h3>101</h3>
                    <span class="badge bg-color-yellow">4h30</span>
                </button>
                <button class="shortcut">
                    <h3>101</h3>
                    <span class="badge">4h30</span>
                </button>
                <button class="shortcut">
                    <h3>101</h3>
                    <span class="badge bg-color-yellow">4h30</span>
                </button>
                <button class="shortcut">
                    <h3>101</h3>
                    <span class="badge">4h30</span>
                </button>
                <button class="shortcut">
                    <h3>101</h3>
                    <span class="badge bg-color-darken">4h30</span>
                </button>
            </div>
        </div>
    </div>
    
    <div class="row">
        <h2>Khách hàng</h2>
        <table class="bordered striped">
            <thead>
                <tr>
                    <th>Họ tên</th>
                    <th>Giới tính</th>
                    <th>CMND</th>
                    <th>Điện thoại</th>
                    <th>Địa chỉ</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Đàm Đức trọng</td>
                    <td>Nam</td>
                    <td>121913177</td>
                    <td>0985699138</td>
                    <td>Yên Dũng, Bắc giang</td>
                </tr>
                <tr>
                    <td>Đàm Đức trọng</td>
                    <td>Nam</td>
                    <td>121913177</td>
                    <td>0985699138</td>
                    <td>Yên Dũng, Bắc giang</td>
                </tr>
                <tr>
                    <td>Đàm Đức trọng</td>
                    <td>Nam</td>
                    <td>121913177</td>
                    <td>0985699138</td>
                    <td>Yên Dũng, Bắc giang</td>
                </tr>           
            </tbody>
        </table>
    </div>
</section>
</body>
</html>