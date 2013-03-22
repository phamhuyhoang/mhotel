<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, maximum-scale=1" />

    <title>Đăng nhập</title>
    
    <link href="css/modern.css" rel="stylesheet" />
    <link href="css/modern-responsive.css" rel="stylesheet" />
    <link href="css/site.css" rel="stylesheet" type="text/css" />
    <link href="js/google-code-prettify/prettify.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="js/assets/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="js/assets/jquery.mousewheel.min.js"></script>

</head>

<body class="modern-ui bg-color-red" onload="prettyPrint()">
<section id="login" class="span3">
    <form class="span3" method="post" action="">
        <h2>Đăng nhập</h2>
        <div class="input-control text">
            <input type="text" placeholder="Tài khoản" />
        </div>
        <div class="input-control password">
            <input type="password" placeholder="Mật khẩu" />
        </div>
        <label class="input-control checkbox">
            <input type="checkbox" />
            <span class="helper">Ghi nhớ?</span>
        </label>
        <div class="control">
            <input class=" bg-color-red border-color-white" type="submit" value="Đăng nhập"/>
            <input class=" bg-color-red border-color-white" type="submit" value="Quên mật khẩu"/>
        </div>
    </form>
</section>
</body>
</html>