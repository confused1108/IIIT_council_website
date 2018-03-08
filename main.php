<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .main-text
        {
            position: absolute;
            top: 50px;
            width: 96.66666666666666%;
            color: #FFF;
        }
        .btn-min-block
        {
            min-width: 170px;
            line-height: 26px;
        }
        .btn-clear
        {
            color: #FFF;
            background-color: transparent;
            border-color: #FFF;
            margin-right: 15px;
        }
        .btn-clear:hover
        {
            color: #000;
            background-color: #FFF;
        }
        .navbar-nav > li{
            padding-right:5px;
        }
        .navbar-inverse .navbar-nav>li>a {
            color: #FFFFFF;
        }
    </style>
    <style>
        .dropdown-submenu{position:relative;}
        .dropdown-submenu>.dropdown-menu{top:0;left:100%;margin-top:-6px;margin-left:-1px;-webkit-border-radius:0 6px 6px 6px;-moz-border-radius:0 6px 6px 6px;border-radius:0 6px 6px 6px;}
        .dropdown-submenu>a:after{display:block;content:" ";float:right;width:0;height:0;border-color:transparent;border-style:solid;border-width:5px 0 5px 5px;border-left-color:#cccccc;margin-top:5px;margin-right:-10px;}
        .dropdown-submenu:hover>a:after{border-left-color:#555;}
        .dropdown-submenu.pull-left{float:none;}.dropdown-submenu.pull-left>.dropdown-menu{left:-100%;margin-left:10px;-webkit-border-radius:6px 0 6px 6px;-moz-border-radius:6px 0 6px 6px;border-radius:6px 0 6px 6px;}

    </style>
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <script src="js/owl.carousel.min.js"></script>
    <style>
        .owl-carousel .item {
            width:180px;
            height:180px;
            position: relative;
            z-index: 100;
            -webkit-backface-visibility: hidden;
            margin: auto;
        }
        .
    </style>
</head>
<body style="background-color: white">
<div class="container-fluid" style="background-color: lightcoral">
    <div class="row">
        <div class="col-md-2" >
            <a href="index.php"><img src="images/logo.png" style="width: 150px; margin-left: 30%;padding-top: 0"></a>
        </div>
        <div class="col-md-8">
            <h3 style="text-align: center; font-weight: bold" >Council of Indian Institutes of Information Technology </h3>
            <h5 style="text-align: center; font-weight: bold;">Ministry of Human Resource and Development<br>Government of India
            </h5>
        </div>
        <div class="col-md-2">
            <div style="margin-left: 30%; margin-top: 10%">
                <img src="images/emblem.png" style="width: 60px; margin-left: 20%;padding-top: -2%">
                <!--                <button type="button" class="btn btn-primary">Log In</button>-->
            </div>
        </div>
    </div>
</div>
<br><br>
<div class="container" >
    <!-------upper Navigation bar-------->
    <div class="row">
        <div class="col-lg-1 "></div>
        <div class="col-lg-10 col-md-12 col-sm-12">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbarr">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbarr">
                        <ul class="nav navbar-nav">
                            <li ><a href="index.php">Home</a></li>\
                            <li ><a href="about.php#about">About</a></li>
                            <li><a href="advocacy.php#advocacy">Advocacy</a></li>
                            <li class="dropdown">
                                <a href="council.php#council" class="dropdown-toggle" data-toggle="dropdown" id="council">The Council <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="members.php#members">Members of  the Council</a></li>
                                    <li><a href="#">Innovation in Governance</a></li>
                                    <li><a href="#">Recruitment</a></li>
                                    <li><a href="#">IIIT Council Minutes of Meeting</a></li>
                                    <li><a href="#">Annual news</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="policy.php#policy" class="dropdown-toggle" data-toggle="dropdown" id="policy">Policy <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Audit Reports</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="news">News & Events <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Upcoming Events</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">MOM 2K17</a></li>
                                            <li><a href="#">Sample</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Innovation in Governance</a></li>
                                </ul>
                            </li>
                            <li><a href="#contact">Contact</a></li>
                            <li><a href="http://josaa.nic.in">JOSSA</a></li>
                            <li><a href="http://ccmt.nic.in/webinfo/Public/Home.aspx">CCMT</a></li>
                        </ul>

                    </div>
                </div>
            </nav>

            <!--------------carousel------------>
            <div class="container" style="margin-left: 0%; width:100%;">
                <div class="row">
                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                            </ol>
                            <div class="carousel-inner" style="max-height: 280px; background-color: dodgerblue">
                                <div class="item active">
                                    <img src="images/gg.JPG" alt="First slide" style="margin-left: auto; margin-right: auto; display:block;">
                                    <div class="carousel-caption" style="display: block; margin-bottom:auto; margin-top: auto">
                                        <h3>IIIT Gwalior</h3>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="images/aa.jpg" alt="Second slide" style="margin-left: auto; margin-right: auto; display:block;">
                                    <div class="carousel-caption">
                                        <h3>IIIT Allahabad</h3>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="images/jj.jpg" alt="Third slide" style="margin-left: auto; margin-right: auto; display:block;">
                                    <div class="carousel-caption">
                                        <h3>IIIT Jabalpur</h3>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="images/kk.jpg" alt="Fourth slide" style="margin-left: auto; margin-right: auto; display:block;">
                                    <div class="carousel-caption">
                                        <h3>IIIT Kancheepuram</h3>
                                    </div>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span></a><a class="right carousel-control"
                                                                                             href="#carousel-example-generic" data-slide="next"><span class="glyphicon glyphicon-chevron-right">
                        </span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="push">
            </div>

            <!-------Lower Navigation bar-------->

            <nav class="navbar navbar-inverse" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="education.php#education" class="dropdown-toggle" data-toggle="dropdown" id="education">Education <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Admissions</a></li>
                                    <li><a href="#">Academic Programmes</a></li>
                                    <li><a href="#">Academic Departments</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="research.php#research" class="dropdown-toggle" data-toggle="dropdown" id="research">Research <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Projects</a></li>
                                    <li><a href="#">Major Research Initiatives</a></li>
                                    <li><a href="#">Technology Developed</a></li>
                                    <li><a href="#">Patents</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="collaboration.php#collaboration" class="dropdown-toggle" data-toggle="dropdown" id="collaboration">Collaboration <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">International</a></li>
                                    <li><a href="#">National</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="environment.php#environment" class="dropdown-toggle" data-toggle="dropdown" id="environment">Environment & Sustainability <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Green Peer Review</a></li>
                                    <li><a href="#">green Policy</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="people">People <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Student</a></li>
                                    <li><a href="#">Faculty</a></li>
                                    <li><a href="#">Alumni</a></li>
                                </ul>
                            </li>
                            <li><a href="initiatives.php#initiatives">initiatives</a></li>
                            <li><a href="#">Sitemap</a></li>
                        </ul>

                    </div>
                </div>
            </nav>
        </div>
        <div class="col-lg-1 "></div>
    </div>
</div>
</body>
<script>
    $('ul.nav li.dropdown').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    }, function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
    });
    $('#council').click(function(){
        var href=$("#council").attr("href");
        window.location.replace(href);
    });
    $('#education').click(function(){
        var href=$("#education").attr("href");
        window.location.replace(href);
    });
    $('#research').click(function(){
        var href=$("#research").attr("href");
        window.location.replace(href);
    });
    $('#collaboration').click(function(){
        var href=$("#collaboration").attr("href");
        window.location.replace(href);
    });
    $('#environment').click(function(){
        var href=$("#environment").attr("href");
        window.location.replace(href);
    });
    $('#policy').click(function(){
        var href=$("#policy").attr("href");
        window.location.replace(href);
    });
</script>
</html>