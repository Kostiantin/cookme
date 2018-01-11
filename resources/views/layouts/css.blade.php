<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style>
    /*custom navbar styles*/
    .navbar-transparent {
        background-color: rgba(0,0,0,0.3);
        border-color: transparent;
        box-shadow: 1px 2px 3px rgba(0, 0, 0, 0.6);
    }
    .navbar-default .navbar-brand,.navbar-default .navbar-nav > li > a {
        color: #fff;
        height: 80px;
        line-height: 50px;
        text-shadow: 1px 1px 1px #000000;
    }
    .navbar-default .navbar-nav > li > a {
        font-size: 15px;
        font-weight: bold;
    }
    .navbar-default .navbar-nav > li > a:hover,.navbar-default .navbar-nav > li > a:focus,.navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus {
        color: #fe6d0d;
    }
    .navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus {
        text-shadow: none;
        background-color: rgba(0,0,0,0.5);
    }
    .navbar-nav > li > .dropdown-menu {
        text-align: center;
        width: auto;
        padding-left: 15px;
        padding-right: 15px;
        background-color: rgba(0,0,0,0.5);
        border: none;
        min-width: 100%;
        -webkit-border-radius: 0px;
        -moz-border-radius: 0px;
        -ms-border-radius: 0px;
        border-radius: 0px;
    }
    .navbar-nav > li > .dropdown-menu a {
        color: #fff;
        text-shadow: 1px 1px 1px #000000;
    }
    .navbar-nav > li > .dropdown-menu a:hover, .navbar-nav > li > .dropdown-menu a:focus {
        text-decoration: none;
        color: #fe6d0d;
    }
    /* languages flags */
    ul.langs {
        display: block;
        width: 100%;
        text-align: left;
        height: auto;
        padding: 0px;
        margin: 0px;
    }
    ul.langs li {
        display: block;
        height: 30px;
        padding: 10px 0px;
        line-height: 30px;
        float: none;
        width: 100%;
    }
    .lng-flags {
        display: block;
        min-width: 100px;
    }
    .lng-flags span.flag-container {
        background-image: url("/img/flags_and_other.png");
        background-repeat: no-repeat;
        width: 12px;
        height: 8px;
        margin-right: 5px;
        display: block;
        position: relative;
        top: 11px;
        float: left
    }
    .dropdown-toggle.lng-flags span.flag-container {
        top: 21px;
    }
    .lng-flags span.lng-name {
        display: block;
        float: left;
    }
    .lng-flags span.flag-container.en {
        background-position: -65px -198px;
    }
    .lng-flags span.flag-container.ru {
        background-position: -65px -162px;
    }
    .lng-flags span.flag-container.ua {
        background-position: -26px -198px;
    }
    .navbar-nav > li > .dropdown-menu a {
        font-weight: bold;
        text-align: left;
        display: block;
    }
    .nav-link.dropdown-toggle.lng-flags i.fa-caret-down, .user-links i.fa-caret-down {
        font-size: 12px;
    }
    /* languages flags end */
    /* user links */
    .nav-item.dropdown.user-links .dropdown-menu {
        text-align: left;
        padding-top: 15px;
    }
    .user-links i.fa-user, .user-links i.fa-sign-in, .user-links i.fa-user-plus {
        color: #73c900!important;
        margin-right: 3px;
        font-size: 12px;
        position: relative;
        bottom: 1px;
        display: inline;
    }
    .navbar-nav > li.dropdown.user-links > .dropdown-menu a {
        line-height: 30px;
    }
    /* user links end */
    /*custom navbar styles end*/
    /*swiper on index page*/
    .swiper-container.home-slider {
        width: 100%;
        height: 600px;
        border-bottom: 4px solid #73c900;
        box-shadow: 2px 2px 5px rgba(0,0,0,0.5);
    }
    .home-slider .swiper-slide {
        height: 600px;
    }
    .home-slider .swiper-lazy.swiper-lazy-loaded {
        height: 600px;
        background-position: center center;
        background-size: cover;
    }
    .swiper-pagination-bullet {

        opacity: 0.8!important;
    }
    .swiper-pagination-bullet-active {
        background-color: #73c900!important;
    }
    .swiper-container-vertical>.swiper-pagination-bullets {
        top: auto!important;
        bottom: 0px;
    }
    .swiper-container-vertical>.swiper-pagination-bullets .swiper-pagination-bullet {
        width: 12px;
        height: 12px;
        box-shadow: 2px 2px 2px #000;
    }
    /*slide captions*/
    .slide-caption {
        position: absolute;
        left: 0px;
        bottom: 0px;
    }
    .slide-caption-content {
        color: #fff;
        font-size: 26px;
        text-shadow: 1px 2px 1px #000;
        box-shadow: 2px 2px 2px #000;
        background-color: rgba(0,0,0,0.6);
        padding: 20px;
        text-align: center;
        border-bottom: none;
        border-left: none;
    }
    .c-text {
        display: inline-block;
        margin-bottom: 0px;
    }
    a.slider-link {
        display: inline-block;
        padding: 10px 25px;
        background-color: #fe6d0d;
        color: #fff;
        text-shadow: none;
        font-size: 20px;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        -ms-border-radius: 4px;
        border-radius: 4px;
        border: 1px solid #fe6d0d;
    }
    a.slider-link:hover, a.slider-link:focus {
        text-decoration: none;
        border: 1px solid #fff;
        color: #000;
    }
    /*slide captions end*/
    /*swiper on index page end*/
    /*social menu*/
    #social-menu {
        top: 125px;
        position: absolute;
        left: 7px;
        z-index: 999;
    }
    #social-menu ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }
    #social-menu ul li a {
        display: block;
        width: 40px;
        height: 35px;
    }
    #social-menu ul li a.fb {
        background: url(/img/fb.png) center center no-repeat;
    }
    #social-menu ul li a.fb:hover {
        background: url(/img/fb_hover.png) center center no-repeat;;
    }
    #social-menu ul li a.lin {
        background: url(/img/lin.png) center center no-repeat;
    }
    #social-menu ul li a.lin:hover {
        background: url(/img/lin_hover.png) center center no-repeat;;
    }
    #social-menu ul li a.twt {
        background: url(/img/twt.png) center center no-repeat;
    }
    #social-menu ul li a.twt:hover {
        background: url(/img/twt_hover.png) center center no-repeat;;
    }
    /*social menu end*/
    /*index page content*/
    .text-content {
        background-image: url(/img/bg_green.jpg);
        background-color: #fff;
        background-repeat: repeat;
        background-position:left top;
        padding: 80px 0px;
    }
    /*index page content end*/
    /*footer*/
    footer {
        padding: 80px 40px;
        background-color: #9a9ba0;
        position: relative;
    }
    #_scrl_top {
        width: 50px;
        height: 50px;
        background-color: #fff;
        border: 1px solid #cecece;
        position: absolute;
        line-height: 55px;
        text-align: center;
        cursor: pointer;
        top: 2px;
        right: 0px;
        z-index: 9999;
    }
    #_scrl_top .fa-angle-up {
        color: #73c900;
        font-size: 25px;
        padding: 0px;
    }
    .footer-links ul {
        margin: 0px;
        padding: 0px;
    }
    .footer-links ul li {
        list-style-type: none;
        padding: 0px;
        margin: 0px;
    }
    .footer-links ul li a {
        color: #fff;
    }
    .footer-links ul li a:hover, .footer-links ul li a:focus {
        color: #fff;
    }
    /*footer end*/
    /*main content*/
    .main-content {
        padding-top: 100px;
    }
    /*main content end*/
</style>

