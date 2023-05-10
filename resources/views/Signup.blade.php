<!DOCTYPE html>
<html>
<head>
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">

</head>
<body>
    <div class="main-wrap">
        <div class="form-wrap">
            <h1>SIGN <span>UP</span></h1>
            <br>
            <form class="form">
                <input type="email" name="email" id="email" placeholder="Email">
                </br>
                <input type="password" name="pass" id="pass" placeholder="Password">
                </br>
                <input type="password" name="cpass" id="cpass" placeholder="Confirm Password">
                </br>
                <button type="submit" class="form-btn">SIGN UP</button>
            </form>
            <span class="sign-up-with">Already Account <a href="/Login" class="login">Login</a></span>
            <div class="social-logo">
                <a href="#" title="Facebook">
                    <img src="/image/f.png" alt="">
                </a>
                <a href="#" title="Google">
                    <img src="/image/g.png" alt="">
                </a>
                <a href="#" title="Twitter">
                    <img src="/image/t.png" alt="">
                </a>
            </div>
        </div>
    </div>
</body>
</html>
