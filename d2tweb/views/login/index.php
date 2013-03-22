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
    <script type="text/javascript">
        $(document).ready(function(){
            $('form').submit(function(){
                var user = $('input[name="username"]').val();
                var pass = $('input[name="password"]').val();
                if(user=='' || pass==''){
                    $('#error').text("Vui lòng nhập tài khoản và mật khẩu!");
                    return false;
                }else{
                    $.ajax({
                        type: 'POST'
                        ,url: 'login.php'
                        ,data: {adm_user:""+user+"", adm_pass:""+pass+""}
                        ,dataType: 'html'
                        ,beforeSend: function(){
                            $('#frmLogin').hide();
                            $('#login').html('<div style="text-align: center; margin: 40% 0;"><img src="<?php echo img_url(); ?>/preloader-w8-cycle-white.gif" /></div>');
                          }
                        ,success: function(string){
    							var getData = $.parseJSON(string);
    							if(!getData==''){
    							 $('span').text(getData.msg);
    							 return false;
    							}else{
    								window.location= '../partsite/index.php';
    								}
                          }
                    });
                }
                return false;
            })
        })
    
    </script>

</head>

<body class="modern-ui bg-color-red" onload="prettyPrint()">
<section id="login" class="span3">
    <form id="frmLogin" class="span3" method="post" action="">
        <h2>Đăng nhập</h2>
        <div class="input-control text">
            <input name="username" type="text" placeholder="Tài khoản" />
        </div>
        <div class="input-control password">
            <input name="password" type="password" placeholder="Mật khẩu" />
        </div>
        <label class="input-control checkbox">
            <input type="checkbox" />
            <span class="helper">Ghi nhớ?</span>
        </label>
        <div class="control">
            <input id="submitLogin" class=" bg-color-red border-color-white" type="submit" value="Đăng nhập"/>
            <p id="error" class="fg-color-white"></p>
        </div>
    </form>
</section>
</body>
</html>