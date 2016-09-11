<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>Halaman Admin AIRMUNCLUB</title>

  <link rel="apple-touch-icon" href="{{URL::to('aset/images/apple-touch-icon.png')}}">
  <link rel="shortcut icon" href="{{URL::to('aset/images/favicon.ico')}}">

<link rel="stylesheet" href="{{URL::to('aset/css/bootstrap.min.css')}}">
 <link rel="stylesheet" href="{{URL::to('aset/css/bootstrap-extend.min.css')}}">
  <link rel="stylesheet" href="{{URL::to('aset/css/site.min.css')}}">

    <link rel="stylesheet" href="{{URL::to('aset/vendor/asscrollable/asScrollable.css')}}">
  <link rel="stylesheet" href="{{URL::to('aset/vendor/switchery/switchery.css')}}">
  <link rel="stylesheet" href="{{URL::to('aset/vendor/intro-js/introjs.css')}}">
  <link rel="stylesheet" href="{{URL::to('aset/vendor/slidepanel/slidePanel.css')}}">
  <link rel="stylesheet" href="{{URL::to('aset/vendor/flag-icon-css/flag-icon.css')}}">


  <!-- Fonts -->
  <link rel="stylesheet" href="{{URL::to('aset/fonts/web-icons/web-icons.min.css')}}">
  <link rel="stylesheet" href="{{URL::to('aset/fonts/brand-icons/brand-icons.min.css')}}">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>


  <!--[if lt IE 9]>
    <script src="{{URL::to('aset/vendor/html5shiv/html5shiv.min.js"></scrip')}}t>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="{{URL::to('aset/vendor/media-match/media.match.min.js"></scrip')}}t>
    <script src="{{URL::to('aset/vendor/respond/respond.min.js"></scrip')}}t>
    <![endif]-->

  <!-- Scripts -->
  <script src="{{URL::to('aset/vendor/modernizr/modernizr.js')}}"></script>
  <script src="{{URL::to('aset/vendor/breakpoints/breakpoints.js')}}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script>
      $(document).ready(function(){
          $("toggle").click(function(){
              $("hide_date").toggle();
          });
      });
  </script>
  <script type="text/javascript">
$(document).ready(function(){
    $(".datepicker").each(function() {
        $(this).datepicker();
    });
});</script>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body style="background-color:#e4eaec;">

  <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">

    <div class="navbar-header" style="width=200px;">
      <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
      data-toggle="menubar">
        <span class="sr-only">Toggle navigation</span>
        <span class="hamburger-bar"></span>
      </button>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
      data-toggle="collapse">
        <i class="icon wb-more-horizontal" aria-hidden="true"></i>
      </button>      
      <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">        
        <img class="navbar-brand-logo" src="{{URL::to('assets/img/logo/1.png')}}" width="50" length="50" alt="...">        
        <span class="navbar-brand-text">Air Mun Club </span>
      </div>
    </div>

    <div class="navbar-container container-fluid">
      <!-- Navbar Collapse -->
      <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
        <!-- Navbar Toolbar -->
        <ul class="nav navbar-toolbar">
          <li class="hidden-float" id="toggleMenubar">
            <a data-toggle="menubar" href="#" role="button">
              <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
            </a>
          </li>
          <li>
              <a>Selamat datang, X
            </a>
          </li>
                </ul>
                <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">                    
                  <li role="presentation">
                    <a href="" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Keluar</a>
                  </li>    
                </ul>
                    </div>
                    
    </div>
                  </div>
                </div>
              </li>
            </ul>
          </li>
        </ul>
        <!-- End Navbar Toolbar -->

      </div>
      <!-- End Navbar Collapse -->
