<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ARTIKEL</title>
    <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bower_components/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="../bower_components/nivo-lightbox/nivo-lightbox.css">
    <link rel="stylesheet" href="../bower_components/nivo-lightbox/nivo-lightbox-theme.css">
    <link rel="stylesheet" href="../bower_components/countdown/jquery.countdown.css">
    <link rel="stylesheet" href="../css/main-artikel-home.css">
</head>

<body data-spy="scroll" style="background-color: #fff">
<div id="home"></div>
<nav id="site-nav" class="navbar navbar-fixed-top navbar-custom">
    <div class="container">
        <div class="navbar-header">
            <div class="site-branding">
                <a class="logo" href="{{URL::to('/')}}">
                   <img src="../images/logo2.png" width="200" alt="Logo">
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
                <li><a href="{{URL::to('/')}}""><b>HOME</b></a></li>
                <li><a href="{{URL::to('/about')}}""><b>ABOUT</b></a></li>
            </ul>
        </div>
    </div>
</nav>

<div>
<section id="photos" class="section photos">
    <div class="container(none)">

        <div class="row">
            <div class="col-md-12(none)">
                <ul class="grid">
                    <li class="grid-item grid-item-sm-6">
                        <div class="photo-overlay">  
                                RAMADHAN SEPANJANG TAHUN
                            <p class="photo-catagory">
                            </p>
                            <div class="btn btn-default classic-button"><a style="color: #fff" href="{{URL::to('/show/artikel/1')}}">READ MORE</a>
                            </div>

                        </div>
                        <img alt="" class="img-responsive center-block" src="../images/article/event_1.jpg">
                        <div class="grid-event">
                            <div class="title-grid">
                                <p>RAMADHAN SEPANJANG TAHUN</p>
                                <div class="title">
                                    Maqun
                                </div>
                                <div class="title">
                                    |
                                </div>
                                <div class="title">
                                    Event
                                </div>
                                
                            </div>
                        </div>
                    </li>

                    
                </ul>
            </div>
        </div>
    </div>
</section>
</div>

<!-- Footer -->
<footer class="site-footer" style="background-color: #000">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="site-info">Organised by UNINUS<br> Template by <a href="#" target="_blank">MAQUN TEAM</a>
                </p>
                <ul class="social-block">
                    <li><a href=""><i class="ion-social-twitter"></i></a></li>
                    <li><a href=""><i class="ion-social-facebook"></i></a></li>
                    <li><a href=""><i class="ion-social-linkedin-outline"></i></a></li>
                    <li><a href=""><i class="ion-social-googleplus"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- script -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../bower_components/countdown/jquery.plugin.min.js"></script>
<script src="../bower_components/countdown/jquery.countdown.min.js"></script>
<script src="../bower_components/nivo-lightbox/nivo-lightbox.min.js"></script>
<script src="../js/main.js"></script>
<script src="../js/mobile.js"></script>
</body>
</html>