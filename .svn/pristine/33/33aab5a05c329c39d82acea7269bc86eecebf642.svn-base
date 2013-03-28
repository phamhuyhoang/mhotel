<script type="text/javascript">
    $(document).ready(function(){
        var form = '<form id="frmHotel" class="span5" method="post" action=""><p></p><div class="input-control text"><input name="hotel_name" type="text" placeholder="Tên khách sạn" /></div><div class="input-control text"><input name="address" type="text" placeholder="Địa chỉ" /></div><div class="input-control text"><input name="phone" type="text" placeholder="Điện thoại" /></div><div class="input-control text"><input name="email" type="text" placeholder="Email" /></div><div class="input-control text"><div class="input-control textarea"><textarea name="description" placeholder="Mô tả"></textarea></div><div class="input-control text"><input name="website" type="text" placeholder="Website" /></div></form>';
        $.Dialog({
            'title'      : 'Đăng ký khách sạn',
            'content'    : form,
            'draggable' : true,
            //'overlay' : false,
            'buttonsAlign': 'right',
            'buttons'    : {
                'Đăng ký'    : {
                    'action': function(){
                            var hotel_name = $('input[name="hotel_name"]').val();
                            var address = $('input[name="address"]').val();
                            var mobile = $('input[name="mobile"]').val();
                            var email = $('input[name="email"]').val();
                            var description = $('textarea[name="description"]').val();
                            var website = $('input[name="website"]').val();
                            
                            if(hotel_name=='' || address==''){
                                $('p').text("Tài khoản hoặc mật khẩu không để trống!");
                                return false;
                            }else{
                                $.ajax({
                                    type: 'POST'
                                    ,url: 'login/process'
                                    ,data: {username:""+user+"", password:""+pass+""}
                                    ,dataType: 'html'
                                    ,beforeSend: function(){
                                        $('p').html('<img src="<?php echo img_url(); ?>/preloader-w8-line-white.gif" />');
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
                            }
                            return false;
                    };
                }
            }
        });
    });
</script>