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
            <div class="cust_data">
            </div>
        </header>



            <div class="sign_up">
                    <h3>You must verify your email address, please check your email for a verification link</h3>
                    <div>
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}

                        </div>
                      @endif
                        <form method="POST" class="user" action="{{ route('verification.send') }}">
                          @csrf
                    <div>
                        <input name="login" id="login
                        " type="submit" value="Resend email" class="btn btn-primary btn-user btn-block" >
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
