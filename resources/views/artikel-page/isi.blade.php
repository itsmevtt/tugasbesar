<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{{$article->title}}}</title>

<!--     <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css"> -->
<!--     <link rel="stylesheet" href="../bower_components/ionicons/css/ionicons.min.css"> -->
<!--     <link rel="stylesheet" href="../bower_components/nivo-lightbox/nivo-lightbox.css"> -->
<!--     <link rel="stylesheet" href="../bower_components/nivo-lightbox/nivo-lightbox-theme.css"> -->
<!--     <link rel="stylesheet" href="../bower_components/countdown/jquery.countdown.css"> -->
<!--     <link rel="stylesheet" href="../css/main-artikel-isi.css"> -->  

    <link rel="stylesheet" href="{{ URL::to('../bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('../bower_components/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('../bower_components/nivo-lightbox/nivo-lightbox.css') }}">
    <link rel="stylesheet" href="{{ URL::to('../bower_components/nivo-lightbox/nivo-lightbox-theme.css') }}">
    <link rel="stylesheet" href="{{ URL::to('../bower_components/countdown/jquery.countdown.css') }}">
    <link rel="stylesheet" href="{{ URL::to('../css/main-artikel-isi.css') }}">
</head>

<body data-spy="scroll" style="background-color: #fff">
<div id="home"></div>
<nav id="site-nav" class="navbar navbar-fixed-top navbar-custom">
    <div class="container">
        <div class="navbar-header">
            <div class="site-branding">
                <a class="logo" href="{{URL::to('/')}}">
                   <img src="{{URL::asset('/images/logo2.png')}}" width="200" alt="Logo" style="position: relative; top: -10px">
                </a>
            </div>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-items"
                    aria-expanded="false">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbar-items" >
            <ul class="nav navbar-nav navbar-right" >
                <li><a href="{{URL::to('/home-artikel')}}""><b style="color: #0C7E05">HOME</b></a></li>
                <li><a href="{{URL::to('/about')}}""><b style="color: #0C7E05">ABOUT</b></a></li>
            </ul>
        </div>
    </div>
</nav>

<div style="height: 100px">
</div>

<!-- Isi Artikel -->

<div class="page-article-utama">
    <div class="page-article-1">
        <div id="status">
            <ul>
                <li style="color: #0C7E05">On Update : {{{$article->update}}}</li>
                <li style="width: 2%"></li>
                <li style="color: #0C7E05">Category : {{{$article->category}}}</li>
            </ul>
        </div>

    <div style="height: 50px">
    </div>

    <h2>{{{$article->title}}}</h2>
    <div class="img-1">
        <img class="img-2" src="{{URL::asset('/images/article/'.$article->photo.'')}}">

<!-- <img class="img-2" src="{{ ('../images/sampul-1.png') }}"> -->

    </div>

    <br>
    <p>{{{$article->article}}}</p>
    </div>
    <div class="side-bar">
    <h4 style="color: #0C7E05">KATEGORI :</h4>
        <ul>
            <li style="color: #0C7E05"><a href="#" style="color: #0C7E05">EVENT</a></li>
            <li style="color: #0C7E05"><a href="#" style="color: #0C7E05">ILMU PENGETAHUAN</a></li>
            <li style="color: #0C7E05"><a href="#" style="color: #0C7E05">TIPS</a></li>
        </ul>
    </div>
</div>

<!-- Footer -->
<footer class="site-footer" style="background-color: #000">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="site-info">Organised by UNINUS<br> Template by <a href="#" target="_blank">MAQUN TEAM</a>
                </p>
                <ul class="social-block">
                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                    <li><a href="#"><i class="ion-social-linkedin-outline"></i></a></li>
                    <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- script -->

<!-- <script src="../bower_components/jquery/dist/jquery.min.js"></script>
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../bower_components/countdown/jquery.plugin.min.js"></script>
<script src="../bower_components/countdown/jquery.countdown.min.js"></script>
<script src="../bower_components/nivo-lightbox/nivo-lightbox.min.js"></script>
<script src="../js/main.js"></script>
<script src="../js/mobile.js"></script> -->

<script type="text/javascript" src="{{ URL::to('../bower_components/jquery/dist/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('../bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('../bower_components/countdown/jquery.plugin.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('../bower_components/countdown/jquery.countdown.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('../bower_components/nivo-lightbox/nivo-lightbox.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('../js/main.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('../js/mobile.js') }}"></script>

</body>
</html>