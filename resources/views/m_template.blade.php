<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pencarian Orang - Sulteng Bergerak</title>
    <link href="{{url('css/mobile.css')}}" rel="stylesheet">
    <link rel="shortcut icon" href="{{url('img/favicon.png')}}">

    <!-- Bootstrap -->
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127110182-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-127110182-1');
    </script>
</head>

<body class="isi">
    <!-- Navbar -->
    <div class="pos-f-t">
        <nav class="navbar navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
            <a href="index.html"><img class="brand" src="{{url('img/logo.png')}}"></a>
        </nav>
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-light p-4">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="http://sultengbergerak.com/index.html">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://sultengbergerak.com/pencarian%20orang.html">PENCARIAN ORANG</a>
                    </li>
                    <li class="nav-item">
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
                        <a class="nav-link" href="http://sultengbergerak.com/kontak%20penting.html">KONTAK PENTING</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://sultengbergerak.com/informasi.html">INFORMASI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://sultengbergerak.com/tentang%20kami.html">TENTANG KAMI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://sultengbergerak.com/faq.html">FAQ</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End of Navbar -->

    <!-- Isi  -->
    <div class="container">
        @yield('content')
    </div>
    <!-- End of Navbar -->


    <!-- Footer -->
    <div class="footer-copyright py-3">
        © Copyright 2018 - Koalisi Masyarakat Sipil
    </div>
    <!-- end of Footer -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>

</body>

</html>
