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
           $('#submit_name').click(function(){
                var name = $('input[name="username"]').val();
                $.post('test/process', { 'name': name},
                    function(data){
                        alert(data.result);
                    }, 'json';
                );
           }); 
        });
    </script>
</head>

<body class="modern-ui bg-color-red" onload="prettyPrint()">

<section id="login" class="span3">
    <form id="frmLogin" class="span3" method="post" action="">
        <h2>Use Ajax Json</h2>
        <div class="input-control text">
            <input name="username" type="text" placeholder="Tài khoản" />
        </div>
        <div class="control">
            <input id="submit_name" class=" bg-color-red border-color-white" type="submit" value="Đăng nhập"/>
            <p id="error" class="fg-color-white"></p>
        </div>
    </form>
</section>
</body>
</html>