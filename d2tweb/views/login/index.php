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
    <script language="javascript">
        $(document).ready(function(){
            $('#frmLogin').submit(function(){
                var user = $('input[name="username"]').val();
                var pass = $('input[name="password"]').val();
                if(user=='' || pass==''){
                    $('p').text("Tài khoản hoặc mật khẩu không để trống!");
                    return false;
                }else{
                    $.ajax({
                        type: 'POST'
                        ,url: '<?php echo base_url(); ?>login/process'
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
            })
        })
    
    </script>
</head>

<body class="modern-ui bg-color-red" onload="prettyPrint()">
<section id="login" class="span3">
    <form id="frmLogin" class="span3" method="post" action="process">
        <h2>Đăng nhập</h2>
         <?php //if(! is_null($msg)){ echo $msg;};?>  
        <div class="input-control text">
            <input name="username" type="text" placeholder="Tài khoản" />
            <?php echo form_error('username'); ?>
        </div>
        <div class="input-control password">
            <input name="password" type="password" placeholder="Mật khẩu" />
            <?php echo form_error('password'); ?>
        </div>
        <div class="control">
            <input class=" bg-color-red border-color-white" type="submit" value="Đăng nhập"/>
            <p class="fg-color-white"></p>
        </div>
    </form>
</section>
</body>
</html>