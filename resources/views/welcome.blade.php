<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.10.8, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.10.8, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="">
  
  <title>Home</title>
  <link rel="stylesheet" href="{{asset('web/assets/mobirise-icons/mobirise-icons.css')}}">
  <link rel="stylesheet" href="{{asset('tether/tether.min.css')}}">
  <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap-grid.min.css')}}">
  <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap-reboot.min.css')}}">
  <link rel="stylesheet" href="{{asset('dropdown/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('socicon/css/styles.css')}}">
  <link rel="stylesheet" href="{{asset('theme/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('gallery/style.css')}}">
  <link rel="stylesheet" href="{{asset('mobirise/css/mbr-additional.css')}}" type="text/css">
  
  
  
</head>
<body>
  <section class="menu cid-rBc3JVrFeY" once="menu" id="menu2-4">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-4" href="https://mobirise.co">
                        COOK.ID</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-black display-4" href="{{route('products.index')}}">Admin Pages !</a>
                </li></ul>
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="tel:+6281919002001">
                    <span class="btn-icon mbri-mobile mbr-iconfont mbr-iconfont-btn">
                    </span>
                    +6281919002001</a></div>
        </div>
    </nav>
</section>

<section class="engine"><a href="https://mobirise.info/t">free amp template</a></section><section class="header6 cid-rBc3WMfGLp mbr-fullscreen" data-bg-video="https://www.youtube.com/watch?v=EdF3IFPi7Co" id="header6-6">

    

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(118, 118, 118);">
    </div>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title align-center mbr-bold pb-3 mbr-fonts-style display-1">
                    WELCOME TO COOK.ID !</h1>
                <p class="mbr-text align-center pb-3 mbr-fonts-style display-5">DELICIOUS WEBSITES !</p>
                
            </div>
        </div>
    </div>

    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>

<section class="mbr-gallery mbr-slider-carousel cid-rBcflKv9dZ" id="gallery2-n">

    

    <div>
        <div>
            <!-- Filter -->
            <div class="mbr-gallery-filter container gallery-filter-active">
                <ul buttons="0">
                    <li class="mbr-gallery-filter-all">
                        <a class="btn btn-md btn-primary-outline active display-7" href="">
                            All</a></li></ul></div><!-- Gallery -->
                            <div class="mbr-gallery-row">
                                <div class="mbr-gallery-layout-default">
                                    <div><div>
                                    @foreach($products as $p)
                                    <div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="{{$p->kategori}}">
                                        <div href="#lb-gallery2-n" data-slide-to="0" data-toggle="modal">
                                            <img src="{{asset('image/'.$p->gambar)}}" alt="" title="" style="object-fit:cover">
                                            <span class="icon-focus"></span>
                                            <span class="mbr-gallery-title mbr-fonts-style display-7">
                                               {{$p->name}}
                                            </span>
                                        </div>
                                    </div>
                                    @endforeach

                                    
                                </div></div><div class="clearfix"></div></div></div>
                                <!-- Lightbox -->
                                <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery2-n">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img src="{{asset('images/background1.jpg')}}" alt="" title=""></div>
                                                        @foreach($products as $p)
                                                        <div class="carousel-item">
                                                            <img src="{{asset('image/'.$p->gambar)}}" alt="" title=""></div>
                                                        @endforeach
                                                           </div><a class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#lb-gallery2-n"><span class="mbri-left mbr-iconfont" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control carousel-control-next" role="button" data-slide="next" href="#lb-gallery2-n"><span class="mbri-right mbr-iconfont" aria-hidden="true"></span><span class="sr-only">Next</span></a><a class="close" href="#" role="button" data-dismiss="modal"><span class="sr-only">Close</span></a></div></div></div></div></divtags>
    </div>

</section>

<section class="carousel slide testimonials-slider cid-rBc4ZMAsFP" data-interval="false" id="testimonials-slider1-e">
    
    

    

    <div class="container text-center">
        <h2 class="pb-5 mbr-fonts-style display-2">
            WHAT OUR FANTASTIC USERS SAY
        </h2>

        <div class="carousel slide" role="listbox" data-pause="true" data-keyboard="false" data-ride="carousel" data-interval="5000">
            <div class="carousel-inner">
                
                
            <div class="carousel-item">
                    <div class="user col-md-8">
                        <div class="user_image">
                            <img src="{{asset('images/face3.jpg')}}">
                        </div>
                        <div class="user_text pb-3">
                            <p class="mbr-fonts-style display-7">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae nostrum, quos voluptas fugiat blanditiis, temporibus expedita cumque doloribus ea, officiis consequuntur repellat minus ad veritatis? Facere similique accusamus, accusantium sunt!
                            </p>
                        </div>
                        <div class="user_name mbr-bold pb-2 mbr-fonts-style display-7">
                            Alex
                        </div>
                        <div class="user_desk mbr-light mbr-fonts-style display-7">
                            DESIGNER
                        </div>
                    </div>
                </div><div class="carousel-item">
                    <div class="user col-md-8">
                        <div class="user_image">
                            <img src="{{asset('images/face2.jpg')}}">
                        </div>
                        <div class="user_text pb-3">
                            <p class="mbr-fonts-style display-7">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae nostrum, quos voluptas fugiat blanditiis, temporibus expedita cumque doloribus ea, officiis consequuntur repellat minus ad veritatis? Facere similique accusamus, accusantium sunt!
                            </p>
                        </div>
                        <div class="user_name mbr-bold pb-2 mbr-fonts-style display-7">
                            Linda
                        </div>
                        <div class="user_desk mbr-light mbr-fonts-style display-7">
                            DEVELOPER
                        </div>
                    </div>
                </div></div>

            <div class="carousel-controls">
                <a class="carousel-control-prev" role="button" data-slide="prev">
                  <span aria-hidden="true" class="mbri-arrow-prev mbr-iconfont"></span>
                  <span class="sr-only">Previous</span>
                </a>
                
                <a class="carousel-control-next" role="button" data-slide="next">
                  <span aria-hidden="true" class="mbri-arrow-next mbr-iconfont"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="clients cid-rBc4Y4uLPz" data-interval="false" id="clients-d">
      

    
        <div class="container mb-5">
            <div class="media-container-row">
                <div class="col-12 align-center">
                    <h2 class="mbr-section-title pb-3 mbr-fonts-style display-2">
                        Our Clients
                    </h2>
                    <h3 class="mbr-section-subtitle mbr-light mbr-fonts-style display-5">
                        Our Wonderful Clients Overseas !</h3>
                </div>
            </div>
        </div>

    <div class="container">
        <div class="carousel slide" role="listbox" data-pause="true" data-keyboard="false" data-ride="carousel" data-interval="4000">
            <div class="carousel-inner" data-visible="5">
                
                
                
                
                
            <div class="carousel-item ">
                    <div class="media-container-row">
                        <div class="col-md-12">
                            <div class="wrap-img ">
                                <img src="{{asset('images/1.png')}}" class="img-responsive clients-img">
                            </div>
                        </div>
                    </div>
                </div><div class="carousel-item ">
                    <div class="media-container-row">
                        <div class="col-md-12">
                            <div class="wrap-img ">
                                <img src="{{asset('images/2.png')}}" class="img-responsive clients-img">
                            </div>
                        </div>
                    </div>
                </div><div class="carousel-item ">
                    <div class="media-container-row">
                        <div class="col-md-12">
                            <div class="wrap-img ">
                                <img src="{{asset('images/3.png')}}" class="img-responsive clients-img">
                            </div>
                        </div>
                    </div>
                </div><div class="carousel-item ">
                    <div class="media-container-row">
                        <div class="col-md-12">
                            <div class="wrap-img ">
                                <img src="{{asset('images/4.png')}}" class="img-responsive clients-img">
                            </div>
                        </div>
                    </div>
                </div><div class="carousel-item ">
                    <div class="media-container-row">
                        <div class="col-md-12">
                            <div class="wrap-img ">
                                <img src="{{asset('images/5.png')}}" class="img-responsive clients-img">
                            </div>
                        </div>
                    </div>
                </div></div>
            <div class="carousel-controls">
                <a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev">
                    <span aria-hidden="true" class="mbri-left mbr-iconfont"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next">
                    <span aria-hidden="true" class="mbri-right mbr-iconfont"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="cid-rBc4Sp5Wvo mbr-reveal mbr-parallax-background" id="footer2-c">

    

    <div class="mbr-overlay" style="opacity: 0.9; background-color: rgb(35, 35, 35);"></div>

    <div class="container">
        <div class="media-container-row content mbr-white">
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <p class="mbr-text">
                    <strong>Address</strong>
                    <br>
                    <br>Jl Raya Puncak KM 77 Cisarua Bogor<br>
                    <br>
                    <br><strong>Contacts</strong>
                    <br>
                    <br>Email: berylheldy@asgira.com &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br>Phone: +6281919002001&nbsp;<br></p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <p class="mbr-text"></p>
            </div>
            <div class="col-12 col-md-6">
                <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAEIpgj38KyLFELm2bK9Y7krBkz1K-cMq8&amp;q=place_id:ChIJDSSQQNa3aS4Ro9-aKJ0foi8" allowfullscreen=""></iframe></div>
            </div>
        </div>
        
    </div>
</section>


  <script src="{{asset('web/assets/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('popper/popper.min.js')}}"></script>
  <script src="{{asset('tether/tether.min.js')}}"></script>
  <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('smoothscroll/smooth-scroll.js')}}"></script>
  <script src="{{asset('dropdown/js/nav-dropdown.js')}}"></script>
  <script src="{{asset('dropdown/js/navbar-dropdown.js')}}"></script>
  <script src="{{asset('touchswipe/jquery.touch-swipe.min.js')}}"></script>
  <script src="{{asset('ytplayer/jquery.mb.ytplayer.min.js')}}"></script>
  <script src="{{asset('masonry/masonry.pkgd.min.js')}}"></script>
  <script src="{{asset('imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('bootstrapcarouselswipe/bootstrap-carousel-swipe.js')}}"></script>
  <script src="{{asset('parallax/jarallax.min.js')}}"></script>
  <script src="{{asset('mbr-clients-slider/mbr-clients-slider.js')}}"></script>
  <script src="{{asset('mbr-testimonials-slider/mbr-testimonials-slider.js')}}"></script>
  <script src="{{asset('vimeoplayer/jquery.mb.vimeo_player.js')}}"></script>
  <script src="{{asset('theme/js/script.js')}}"></script>
  <script src="{{asset('slidervideo/script.js')}}"></script>
  <script src="{{asset('gallery/player.min.js')}}"></script>
  <script src="{{asset('gallery/script.js')}}"></script>
  
  
</body>
</html>