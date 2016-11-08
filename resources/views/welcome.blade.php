<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Jamboo</title>
        <meta name="author" content="Alvaro Trigo Lopez" />
        <meta name="description" content="fullPage full-screen backgrounds." />
        <meta name="keywords"  content="fullpage,jquery,demo,screen,fullscreen,backgrounds,full-screen" />
        <meta name="Resource-type" content="Document" />
        
        <link rel="stylesheet" href="css/animate.min.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/styles.css" />
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/responsive.css">
        
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/effect-slide.js"></script>
        <script type="text/javascript" src="js/scrolloverflow.js"></script>
        <script type="text/javascript" src="js/jquery.fullPage.js"></script>
        <script type="text/javascript" src="js/examples.js"></script>
    </head>
    <body>
        <nav>
            <div class="logo">
                <svg  version="1.1" width="40"  height="35" style="stroke-width: 6px; " viewBox="0 0 320 320" fill="none" stroke="#fff" stroke-linecap="round" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <polygon stroke="#fff" id="e29_polygon" style="stroke-width: 6px ;" points="0 240 130 30 260 240" fill="none" ></polygon>
                <defs>
                <path id="r1">
                    <animate id="p0" attributeName="d" values=" m132,12,-90 225,0; m132,12, 160 180,0 ;" dur="7s" repeatCount="indefinite"/>
                        <animate attributeName="stroke-width" values="0;4;4;4;0" dur="7s" repeatCount="indefinite" begin="p0.begin"/>
                        </path>
                        </defs>
                        <use xlink:href="#r1" transform="rotate(10 10 10)"/>
                    </svg>
                </div>
                <div class="navbar">
                    <ul>
                        <li class="sidebar-toggle"><i class="fa fa-bars" aria-hidden="true"></i></li>
                    </ul>
                </div>
            </nav>
            <!-- Overlay for fixed sidebar -->
            <div class="sidebar-overlay"></div>
            <!-- Material sidebar -->
            <aside id="sidebar" class="sidebar sidebar-default sidebar-fixed-right " role="navigation">
                <!-- Sidebar header -->
                
                <!-- Sidebar navigation -->
                    <span class="sidebar-toggle xClose"><i class="fa fa-times" aria-hidden="true"></i></span>
                <ul class="nav sidebar-nav">
                    <li>
                        <a href="#Ar-ti">
                            <i class="sidebar-icon md-inbox"></i>
                            Ar-ti
                        </a>
                    </li>
                    <li>
                        <a href="#Work">
                            <i class="sidebar-icon md-star"></i>
                            Work
                        </a>
                    </li>
                    <li>
                        <a href="#Project">
                            <i class="sidebar-icon md-send"></i>
                            Project
                        </a>
                    </li>
                    <li>
                        <a href="#How-We-Work">
                            <i class="sidebar-icon md-drafts"></i>
                            How We Work
                        </a>
                    </li>
                    <li>
                        <a href="#Create-Project">
                            <i class="sidebar-icon md-drafts"></i>
                            Create Project
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li class="dropdown">
                        <a class="ripple-effect dropdown-toggle" href="#" data-toggle="dropdown">
                            All Mail
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#" tabindex="-1">
                                    Social
                                    <span class="sidebar-badge">12</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" tabindex="-1">
                                    Promo
                                    <span class="sidebar-badge">0</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            Trash
                            <span class="sidebar-badge">3</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Spam
                            <span class="sidebar-badge">456</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Follow Up
                            <span class="sidebar-badge badge-circle">i</span>
                        </a>
                    </li>
                </ul>
                <!-- Sidebar divider -->
                <!-- <div class="sidebar-divider"></div> -->
                
                <!-- Sidebar text -->
                <!--  <div class="sidebar-text">Text</div> -->
            </aside>
            <div id="fullpage" class="dragdealer">
                <div class="section " id="section0">
                    <video autoplay loop muted id="myVideo" poster="images/Home_Fallback_01.jpg">
                        <source src="imgs/Home18.mp4" type="video/mp4">
                    </video>
                    <div class="layer">
                        <div class="logo-home">
                            <span id="home-head">B</span>
                            <svg version="1.1"  id="e39_polygon" viewBox="0 0 320 320" fill="none" stroke="#fff" stroke-linecap="round"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <polygon stroke="#fff" id="e29_polygon" style=";" points="0 240 130 30 260 240" fill="none"transform=""></polygon>
                            <defs>
                            <path id="r2">
                                <animate id="p1" attributeName="d" values=" m132,12,-90 225,0; m132,12, 160 180,0 ;" dur="7s" repeatCount="indefinite"/>
                                    <animate attributeName="stroke-width" values="0;4;4;4;0" dur="7s" repeatCount="indefinite" begin="p1.begin"/>
                                    </path>
                                    
                                    </defs>
                                    <use xlink:href="#r2" transform="rotate(10 10 10)"/>
                                </svg>
                                <span id="home-head">D</span>
                            </div>
                            
                            <div class="desk-home">
                                <p>Creating Award-winning Apps and Websites since 2016</p>
                                <button class="btn btn-primary">FEATURED WORK</button>
                            </div>
                        </div>
                    </div>
                    <div class="section" id="section1">
                        <div class="slide" id="slide1" data-anchor="slide1">
                            <div class="intro">
                                <h1>Clickable</h1>
                                <p>
                                    You can even click on the navigation and jump directly to another section.
                                </p>
                            </div>
                        </div>
                        <div class="slide" id="slide2" data-anchor="slide2">
                            <h1>Slide 2</h1>
                        </div>
                        <div class="slide" id="slide3" data-anchor="slide3">
                            <h1>Slide 3</h1>
                        </div>  <div class="slide" id="slide3" data-anchor="slide3">
                        <h1>Slide 4</h1>
                    </div>
                    <div class="slide" id="slide3" data-anchor="slide3">
                        <h1>Slide 5</h1>
                    </div>
                </div>
                <div class="section" id="section2">
                    <section id="three" class="no-padding">
                        <div class="container-fluid">
                            <div class="row no-gutter">
                                <div class="col-lg-4 col-sm-6 col-xs-6 col-md-4 ">
                                    <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="">
                                        <img src="images/1.jpg" class="img-responsive" alt="Image 1">
                                        
                                        <div class="gallery-box-caption">
                                            <div class="gallery-box-content">
                                                <div>
                                                    <p>History.com</p>
                                                    <button>EXPLORE</button>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-sm-6 col-xs-6 col-md-4 ">
                                    <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="//splashbase.s3.amazonaws.com/getrefe/regular/tumblr_nqune4OGHl1slhhf0o1_1280.jpg">
                                        <img src="images/2.jpg" class="img-responsive" alt="Image 2">
                                        <div class="gallery-box-caption">
                                            <div class="gallery-box-content">
                                                <div>
                                                    <p>72andSunny</p>
                                                    <button>EXPLORE</button>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-sm-6 col-xs-6 col-md-4 ">
                                    <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="//splashbase.s3.amazonaws.com/unsplash/regular/photo-1433959352364-9314c5b6eb0b%3Fq%3D75%26fm%3Djpg%26w%3D1080%26fit%3Dmax%26s%3D3b9bc6caa190332e91472b6828a120a4">
                                        <img src="images/3.jpg" class="img-responsive" alt="Image 3">
                                        <div class="gallery-box-caption">
                                            <div class="gallery-box-content">
                                                <div>
                                                    <p>Tap Project</p>
                                                    <button>EXPLORE</button>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-sm-6 col-xs-6 col-md-4 ">
                                    <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="//splashbase.s3.amazonaws.com/lifeofpix/regular/Life-of-Pix-free-stock-photos-moto-drawing-illusion-nabeel-1440x960.jpg">
                                        <img src="images/4.jpg" class="img-responsive" alt="Image 4">
                                        <div class="gallery-box-caption">
                                            <div class="gallery-box-content">
                                                <div>
                                                    <p>Cosmic Mixtape</p>
                                                    <button>EXPLORE</button>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-sm-6 col-xs-6 col-md-4 ">
                                    <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="//splashbase.s3.amazonaws.com/lifeofpix/regular/Life-of-Pix-free-stock-photos-new-york-crosswalk-nabeel-1440x960.jpg">
                                        <img src="images/5.jpg" class="img-responsive" alt="Image 5">
                                        <div class="gallery-box-caption">
                                            <div class="gallery-box-content">
                                                <div>
                                                    <p>Digital Ads</p>
                                                    <button>EXPLORE</button>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-sm-6 col-xs-6 col-md-4 ">
                                    <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="//splashbase.s3.amazonaws.com/lifeofpix/regular/Life-of-Pix-free-stock-photos-clothes-exotic-travel-nabeel-1440x960.jpg">
                                        <img src="images/6.jpg" class="img-responsive" alt="Image 6">
                                        <div class="gallery-box-caption">
                                            <div class="gallery-box-content">
                                                <div>
                                                    <p>Archive</p>
                                                    <button>EXPLORE</button>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="section" id="section3">
                    <h1>One Image = One thousand words</h1>
                </div>
                <div class="section" id="section4">
                    <h1>One Image = One thousand words</h1>
                </div>
            </div>
        </body>
    </html>