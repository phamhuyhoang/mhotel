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
<?php if(!$check_hotel): ?>
    <script type="text/javascript">
        $(document).ready(function(){
            var form = '<form id="frmHotel" class="span5" method="post" action="#"><div class="input-control text"><input name="hotel_name" type="text" placeholder="Tên khách sạn" /></div><div class="input-control text"><input name="address" type="text" placeholder="Địa chỉ" /></div><div class="input-control text"><input name="phone" type="text" placeholder="Điện thoại" /></div><div class="input-control text"><input name="email" type="text" placeholder="Email" /></div><div class="input-control text"><div class="input-control textarea"><textarea placeholder="Mô tả"></textarea></div></form>';
            $.Dialog({
                'title'      : 'Đăng ký khách sạn',
                'content'    : form,
                'buttons'    : {
                    'Ok'    : {
                        'action': function(){}
                    }
                }
            });
        });
    </script>
<?php endif; ?>