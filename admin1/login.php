<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin login</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <body id="particles-js"></body>
    <div class="animated bounceInDown">
        <div class="container">
            <span class="error animated tada" id="msg"></span>
            <form name="form1" class="box" onsubmit="return checkStuff()">
                <h4>Admin<span>Dashboard</span></h4>
                <h5>Sign in to your account.</h5>
                <input type="email" name="email" placeholder="Email" autocomplete="off">
                <i class="typcn typcn-eye" id="eye"></i>
                <input type="password" name="password" placeholder="Passsword" id="pwd" autocomplete="off">
                <label>
                    <input type="checkbox">
                    <span></span>
                    <small class="rmb">Remember me</small>
                </label>
                <a href="#" class="forgetpass">Forget Password?</a>
                <input type="submit" value="Sign in" class="btn1">
            </form>
            <a href="#" class="dnthave">Don’t have an account? Sign up</a>
        </div>
        <div class="footer">

        </div>
    </div>
</body>
<script src="admin/js/login.js"></script>

</html>