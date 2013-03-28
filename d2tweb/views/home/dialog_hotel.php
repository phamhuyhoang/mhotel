<form id="frmHotel" method="post" action="">
    <p></p>
    <div class="input-control text">
        <input name="hotel_name" type="text" placeholder="Tên khách sạn" />
    </div>
    <div class="input-control text">
        <input name="address" type="text" placeholder="Địa chỉ" />
    </div>
    <div class="input-control text">
        <input name="phone" type="text" placeholder="Điện thoại" />
    </div>
    <div class="input-control text">
        <input name="email" type="text" placeholder="Email" />
    </div>
    <div class="input-control textarea">
        <textarea name="description" placeholder="Mô tả"></textarea>
    </div>
    <div class="input-control text">
        <input name="website" type="text" placeholder="Website" />
    </div>
    
    <input type="submit" value="Đăng ký"/>
    <input type="reset" value="Làm lại"/>
</form>

<script type="text/javascript">
    $(document).ready(function() {
         $(function() {
            $( "#frmHotel" ).dialog({
                minWidth: 380,
                modal: true,
                title: "Đăng ký khách sạn",

            }).dialog("widget").find(".ui-dialog-titlebar-close").remove();
        });
    });
</script>