<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link href="{{ url('css/style.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ url('img/favicon.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127110182-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-127110182-1');
    </script>
  </head>
  <body>
      <nav class="navbar mainpage navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="index.html"><img src="{{ url('img/logo.png') }}"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                      <a class="nav-link" href="http://sultengbergerak.com/index.html">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://sultengbergerak.com/pencarianorang.html">PENCARIAN ORANG</a>
                    </li>
                    <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/') }}">KEBUTUHAN LOGISTIK</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://sultengbergerak.com/peta.html">PETA BENCANA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://sultengbergerak.com/relawan.html">RELAWAN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://sultengbergerak.com/donasi.html">DONASI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://sultengbergerak.com/kontakpenting.html">KONTAK PENTING</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://sultengbergerak.com/informasi.html">INFORMASI</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- end of Navbar -->
        @yield('header')

        <div class="isi">
            <div class="container">
                @yield('content')
            </div>
        </div>

    <!-- Footer -->
    <div class="footer-copyright py-3">
        <div class=" kiri text-left">
            &copy; Copyright 2018 - Koalisi Masyarakat Sipil
        </div>
        <div class="col-lg kanan text-right">
            <a href="#">FAQ</a>
            <a href="tentangkami.html">TENTANG KAMI</a>
        </div>
    </div>
    <!-- end of Footer -->

    </body>
</html>
