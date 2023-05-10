<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up Form</title>
        <link rel="stylesheet" href="{{url('/css/style.css')}}">        <!--Add your CSS file link-->
    </head>
    <body >
       <div class="main-wrap">
           <div class="form-wrap">
               <h1>LOGIN <span></span></h1><br><br>
               {{-- <h6>Welcome to Wavefire Coding</h6> --}}
               <form class="form">
                   <input type="email" name="email" id="email" placeholder="Email">
                    </br>
                   <input type="password" name="pass" id="pass" placeholder="Password">
                    </br><br>

                   <button type="submit" class="form-btn">LOGIN</button>
               </form>
               <span class="sign-up-with">Already have an Account <a href="/Signup" class="login">Sing Up</a></span>
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
