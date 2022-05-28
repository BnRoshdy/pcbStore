<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>
<body>
<header> <!----------------------HEADER------------------------>

    <a href="/" class="logo_admin">MYPCB</a>

</header><!---------------------------------------------------->
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
        <div class="flex">
            <div class="sign_up">
                <form method="POST" action="{{ route('admin.login') }}">
                @csrf
                    <h3>sign in</h3>
                    <div>
                        <label for="31">Email address</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div>
                        <label for="32">password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>



                    <div>
                        <input type="submit" value="sign in">
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


    </div>
</body>
</html>
