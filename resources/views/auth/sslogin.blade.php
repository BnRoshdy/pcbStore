<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <title>sign in</title>
        <link rel="stylesheet" href="css/login.css">
        <script src="https://kit.fontawesome.com/2924b03037.js" crossorigin="anonymous"></script>

    </head>
    <body>

        <header> <!----------------------HEADER------------------------>
            <a href="/" class="logo_admin">MYPCB</a>

        </header>



            <div class="sign_up">
                    <h3>sign in</h3>
                    <div>

                        <form method="POST" class="user" action="{{ route('login') }}">
                          @csrf
                           <div>
                               <label for="22">Email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email address">
                               @error('email')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                           </div>
                    </div>
                    <label for="32">password</label>
                    <div>
                       <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="password">
                       @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-checkbox small">
                            <a href="">forget password?</a>
                        </div>
                    </div>
                    <div>
                        <input type="submit" value="login" class="btn btn-primary btn-user btn-block" >
                    </div>

                </form>
            </div>
        </div>
        <!-- -------footer--------------->
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
                            experience through our site, providing most if not all of what can be.</p>                        <div class="footer-social">
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
