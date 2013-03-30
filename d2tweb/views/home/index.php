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
    <div>
        <button class="bg-color-red fg-color-white">
            <i class="icon-plus-2"></i>
            Thêm khách hàng
        </button>
                
        <div class="input-control select span3" style="float: right;">
            <select>
                <option>Chọn thao tác</option>
                <option>Đang ở</option>
            </select>
        </div>
    </div>
    <table class="bordered ">
        <thead>
            <tr>
                <th><input type="text" placeholder="Họ tên" /></th>
                <th><input type="text" placeholder="Giới tính" /></th>
                <th><input type="text" placeholder="CMND" /></th>
                <th><input type="text" placeholder="Điện thoại" /></th>
                <th><input type="text" placeholder="Địa chỉ" /></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Đàm Đức Trọng</td>
                <td>Nam</td>
                <td>121913177</td>
                <td>0985699138</td>
                <td>Yên Dũng, Bắc giang</td>
            </tr>
            <tr>
                <td>Đàm ĐứcTtrọng</td>
                <td>Nam</td>
                <td>121913177</td>
                <td>0985699138</td>
                <td>Yên Dũng, Bắc giang</td>
            </tr>
            <tr>
                <td>Đàm Đức Trọng</td>
                <td>Nam</td>
                <td>121913177</td>
                <td>0985699138</td>
                <td>Yên Dũng, Bắc giang</td>
            </tr>           
        </tbody>
    </table>
</div>

<?php if(!$check_hotel) require_once('dialog_hotel.php'); ?>