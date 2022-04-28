<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <title>Register</title>
        <link rel="stylesheet" href="css/login.css">
        <script src="https://kit.fontawesome.com/2924b03037.js" crossorigin="anonymous"></script>

    </head>
    <body>

        <header> <!----------------------HEADER------------------------>
            <a href="/" class="logo_admin">MYPCB</a>
            <div class="cust_data">
            <a href="#">My Account</a>
            <a href="#">My Cart</a>
            </div>
        </header>
                    <h3>Reset passwordS</h3>
                    <div>
                        <form method="post" class="user" action="{{ route('register') }}">
                        @csrf
                        <label for="22">User_name</label>
                            <div class="form-group row">
                               <div class="col-sm-12 mb- mb-sm-0">
                                   <input id="name" type="text" name="name" class="form-control form-control-user @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter your user_Name">
                                   @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <label for="22">Email</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email address">
                                    @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                               </div>
                            </div>
                            <label for="23">Create password</label>
                            <input id="password" type="password" name="password" class="form-control form-control-user @error('password') is-invalid @enderror" required autocomplete="new-password" placeholder="password">
                            @error('password')
                               <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>

                    <div class="col-sm-6">
                        <label for="24">confirm password</label>
                        <input id="password-confirm" type="password"class="form-control form-control-user" name="password_confirmation" required autocomplete="new-password" placeholder="confirm password">
                    </div>
                    <div>
                        <input type="submit" value="register" class="btn btn-primary btn-user btn-block" >
                    </div>

                </form>

            </div>
            <footer><!---------------------footer------------------------->
                <div class="footer-top-area">
                    <div class="zigzag-bottom"></div>
                    <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-about-us">
                            <h4><span>PCB</span></h4>
                            <p>In our company we insur best quality
                                of products and before that our service to all customars, giving you a fine 
                                experience through our site, providing most if not all of what can be.</p>                            <div class="footer-social">
                                <a href="#" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                                <a href="#" target="_blank"><i class="fa-brands fa-twitter-square"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h4 class="footer-wid-title">User Navigation </h4>
                        <ul>
                            <li><a href="#">our policies</a></li>
                            <li><a href="#">more about us</a></li>
                        </ul>
                    </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h4 class="footer-wid-title">Help Center</h4>
                        <ul>
                        <li>Mobile Phone : 01002208821 </li>
                        </ul>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                </footer>
    </body>
</html>