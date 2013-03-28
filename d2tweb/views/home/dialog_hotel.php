<form id="frmHotel" method="post" action="home/process_hotel">
    <div class="input-control text">
        <input name="hotel_name" type="text" placeholder="Tên khách sạn*" />
    </div>
    <div class="input-control text">
        <input name="address" type="text" placeholder="Địa chỉ*" />
    </div>
    <div class="input-control text">
        <input name="phone" type="text" placeholder="Điện thoại*" />
    </div>
    <div class="input-control text">
        <input name="email" type="text" placeholder="Email*" />
    </div>
    <div class="input-control textarea">
        <textarea name="description" placeholder="Mô tả"></textarea>
    </div>
    <div class="input-control text">
        <input name="website" type="text" placeholder="Website" />
    </div>
    <div style="text-align: center;">
        <input class="bg-color-red" type="submit" value="Đăng ký"/>
        <input type="reset" value="Làm lại"/>
        <p></p>
    </div>
</form>

<script type="text/javascript">
    $(document).ready(function() {
        //load form
        $( "#frmHotel" ).dialog({
            minWidth: 380,
            modal: true,
            title: "Đăng ký khách sạn"
        }).dialog("widget").find(".ui-dialog-titlebar-close").remove();
        
        //process
        $('input[type="submit"]').click(function(){
        //FORM VALIDATION: validates on submit
             $("#frmHotel").validate({
                //our custom error placement
                errorElement: "p",
                errorPlacement: function(error, element) {
                    error.appendTo(element.parent());
                    element.parent().addClass('fg-color-yellow');
                },
                
                rules: {
                    hotel_name: {
                        required: true,
                        minlength: 10   
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    address: {
                        required: true,
                        minlength: 10
                    },
                    phone: {
                        required: true,
                        number: true,
                        minlength: 6
                    }
                },
                messages: {
                    hotel_name: {
                          required:"Không để trống!",
                          minlength:"Từ 10 ký tự trở lên"
                          },
                    email: {
                        required:"Không để trống!",
                        email:"Email không hợp lên"
                        },
                    address: {
                          required:"Không để trống!",
                          minlength:"Từ 10 ký tự trở lên"
                          },
                    phone: {
                          required:"Không để trống!",
                          number:"Phải là số",
                          minlength: "Từ 6 ký số trở lên"
                          }
                },

                //Submit ajax
                submitHandler: function(form) {
                    var txthotel_name  = $('input[name="hotel_name"]').val();
                    var txtaddress     = $('input[name="address"]').val();
                    var txtphone       = $('input[name="phone"]').val();
                    var txtemail       = $('input[name="email"]').val();
                    var txtwebsite     = $('input[name="website"]').val();
                    var txtdescription = $('textarea[name="description"]').val();

                    $.ajax({
                        type: 'POST'
                        ,url: '<?php echo base_url(); ?>home/process_hotel'
                        ,data: {hotel_name:""+txthotel_name+"", address:""+txtaddress+"", phone:""+txtphone+"", email:""+txtemail+"", website:""+txtwebsite+"", description:""+txtdescription+""}
                        ,dataType: 'html'
                        ,beforeSend: function(){
                            $('p').html('<img src="<?php echo img_url(); ?>/preloader-w8-line-black.gif" />');
                          }
                        ,success: function(string){
							var getData = $.parseJSON(string);
							if(getData.err){
							 $('p').text(getData.err);
							 return false;
                            }else{
                                window.location= getData.url;
							}
                      }
                    });
                        //return false;
                }
            });  
        }); // end process
    });
</script>