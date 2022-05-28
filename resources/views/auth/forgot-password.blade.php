<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <title>Forget Password</title>
        <link rel="stylesheet" href="{{url('css/login.css')}}">
        <script src="https://kit.fontawesome.com/2924b03037.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header> <!----------------------HEADER------------------------>
            <a href="/" class="logo_admin">MYPCB</a>
            <div class="cust_data">
            </div>
        </header>
        <section>
            <div class="flex">
                <h2>Forget Password</h2>

                  @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}

                          </div>
                      <br>
                  @endif

                <div class="forget">

                         <form method="POST" class="user" action="{{ route('password.request') }}">
                          @csrf
                        <div>
                            <label for="31">Email address</label>
                            <input type="text" id="email" name="email"  placeholder="email" required>
                               @error('email')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                @enderror
                        </div>
                        <div>
                              <input name="reset" id="reset" class="btn btn-primary btn-user btn-block" type="submit" value="reset">
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- -------footer--------------->
        <footer><!---------------------footer------------------------->
            <div class="footer-top-area">
                <div class="zigzag-bottom"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-about-us">
                                <h4><span>about us</span></h4>
                                <p>In our company we insur best quality
                                    of products and before that our service to all customars, giving you a fine
                                    experience through our site, providing most if not all of what can be.</p>

                            </div>
                        </div>
                        <h4 class="footer-wid-title">Help Center</h4>
                        <ul>
                            <li>Mobile Phone : 01002208821 </li>
                        </ul>
                    </div>
                </div>
            </div>

        </footer>
    </body>
</html>
