<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="{{config('app.name', 'headline')}}"/>
   <meta name="name" content="{{config('app.name', 'headline')}}">
     <link rel="canonical" href="@yield('canonical')" />
    <meta name="keywords" content="ecom , baiviethay , bài_viết_hay , tintuccongnghe , tin_tức_công_nghệ,tinthucthegioi,tin_tức_thế_giới"/>
    <meta name="description" content="ecom có sách rất hay"/>
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:url" content="{{ route('/') }}" />
    <meta name="twitter:card" content="{{config('app.name', 'FullTechWord')}}">
    <meta name="twitter:site" content=" ">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:creator" content=" ">
    <title> @yield('title') </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/frontend/v3/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/frontend/v3/home.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/frontend/v3/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/frontend/v3/detail.css') }}">
  </head>
  <body>
       <section id="header">
            <div class="container-fluid padd0">
                    <div class="header-top">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-xs-8 header-left">
                                <img id="logo" src="../../images/anh1.png" alt="">
                            </div>
                            <div class="col-lg-4 col-md-4 col-xs-4 text-center header-right">
                                    <h3> <a href="{{ route('/') }}" title="Subscribe to Newsletter">Subscribe to Newsletter</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="header-menu">
              <nav class="navbar navbar-expand-lg navbar-light bg-light">

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">


                @foreach ($categories as $cate)

                    @if($cate->id == 2)
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('/') }}">{{$cate->name}}</a>
                     </li>
                    @else
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('categories',['id' => $cate->id,'slug' => $cate->slug]) }}" title="{{$cate->slug }}">{{$cate->name}}</a>
                     </li>
                    @endif

                @endforeach

            </ul>


          </div>
          <div class="sreach marRight7">
                <a href="#collapseExample"  data-toggle="collapse"  role="button" aria-expanded="false" aria-controls="collapseExample">   <i aria-hidden="true" class="fa fa-search"></i></a>
          </div>

            <div class="menu2 marRight7">
                 <span style="font-size:30px;cursor:pointer" id="openNav" >&#9776;</span>
            </div>

            <div id="mySidenav" class="sidenav">
                  <a href="javascript:void(0)" class="closebtn" id="closeNav">&times;</a>
                  <a href="#">About</a>
                  <a href="#">Services</a>
                  <a href="#">Clients</a>
                  <a href="#">Contact</a>
          </div>
        </nav>

        <div class="collapse" id="collapseExample" style="background: rgb(248, 249, 250) !important;">
              <div class="container">
                  <form method="get" action="{{ route('sreach') }}">
                        <div class="form-group">
                        <input type="text" class="form-control" name="keyword">
                    </div>
                  </form>
              </div>
        </div>

                    </div>
            </div>

       </section>

        @yield('content')
       <section id="form-home">
            <div class="container-fluid">
                <div class="row">
                    <div class="offset-lg-3 col-lg-6 col-md-12 col-xs-12">
                            <form method="post">
                                  <h3><i aria-hidden="true" class="fa fa-bolt"></i> Newsletter — Subscribe for Free</h3>
                                  <p>Join over 500,000 information security professionals — Get the best of our cyber security coverage delivered to your inbox every morning.</p>
                                   <div class="form-group email">
                                      <input type="email" class="form-control" name="email">
                                            <button type="submit" class="btn btn-default fix-submit">Gui</button>

                                  </div>
                            </form>
                    </div>
                </div>
            </div>
       </section>

       <section id="home-footer">
            <div class="container">
                 <div class="title-footer">
                       <h5> Follow Us</h5>
                 </div>
                <div class="row">
                     <div class="col-lg-2 col-md-4 col-xs-4">
                            <div class="social-box s-tw">
                                <a href="#" title=""><i aria-hidden="true" class="fa fa-twitter"></i>
                                    <div class="sb-text">485,000 Followers</div>
                                </a>

                            </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-xs-4">
                         <div class="social-box s-fb">
                         <a href="" title="">
                             <i aria-hidden="true" class="fa fa-facebook"></i>
                            <div class="sb-text">2,090,200 Followers</div>
                         </a>

                         </div>

                     </div>
                     <div class="col-lg-2 col-md-4 col-xs-4">
                            <div class="social-box s-in">
                                <a href="" title="">
                                    <i aria-hidden="true" class="fa fa-linkedin"></i>
                                        <div class="sb-text">6,600 Fans</div>
                                </a>
                            </div>
                     </div>

                     <div class="col-lg-2 col-md-4 col-xs-4">
                             <div class="social-box s-gp">
                                  <a href="" title="">
                                    <i aria-hidden="true" class="fa fa-google-plus"></i>
                                    <div class="sb-text">1,900,350 Followers</div>
                                  </a>
                             </div>
                     </div>

                    <div class="col-lg-2 col-md-4 col-xs-4">
                             <div class="social-box s-yt">
                                  <a href="" title="">
                                    <i aria-hidden="true" class="fa fa-youtube"></i>
                                    <div class="sb-text">5,600 Subscribers</div>
                                  </a>
                             </div>
                     </div>

                     <div class="col-lg-2 col-md-4 col-xs-4">
                             <div class="social-box s-it">
                                  <a href="" title="">
                                    <i aria-hidden="true" class="fa fa-instagram"></i>
                                    <div class="sb-text">36,000 Followers</div>
                                  </a>
                             </div>
                     </div>

                </div>

                <div class="menu-footer">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="title-footer-menu">
                                 <h5> About </h5>
                          </div>

                          <div class="menu-footer">
                                 <ul>
                                     <li><a href="" title="">About Us</a></li>
                                     <li><a href="" title="">Advertising</a></li>
                                     <li><a href="" title="">Write For Us</a></li>
                                     <li><a href="" title="">Editorial Team</a></li>
                                     <li><a href="" title="">Contact</a></li>
                                 </ul>
                          </div>

                        </div>

                     <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="title-footer-menu">
                                 <h5> Pages </h5>
                          </div>

                          <div class="menu-footer">
                                 <ul>
                                     <li><a href="" title="">RSS Feeds</a></li>
                                     <li><a href="" title="">Deals Store</a></li>
                                     <li><a href="" title="">AdChoices</a></li>
                                     <li><a href="" title="">Privacy Policy</a></li>
                                     <li><a href="" title="">Copyright Policy</a></li>
                                 </ul>
                          </div>

                        </div>

                <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="title-footer-menu">
                                 <h5> Deals </h5>
                          </div>

                          <div class="menu-footer">
                                 <ul>
                                     <li><a href="" title="">Exclusives</a></li>
                                     <li><a href="" title="">Hacking</a></li>
                                     <li><a href="" title="">Development</a></li>
                                     <li><a href="" title="">Android</a></li>
                                     <li><a href="" title="">Apple/Mac</a></li>
                                 </ul>
                          </div>

                </div>


                <div class="col-lg-3 col-md-6 col-xs-12">
                     <a href="" title="">
                          <div class="f-menu-bt">
                            <i aria-hidden="true" class="fa fa-rss"></i>
                             RSS Feeds
                         </div>
                     </a>

                      <a href="" title="">
                          <div class="f-menu-bt">
                            <i aria-hidden="true" class="fa fa-envelope"></i>
                             RSS Feeds
                         </div>
                     </a>

                      <a href="" title="">
                          <div class="f-menu-bt">
                                <i aria-hidden="true" class="fa fa-telegram"></i>
                             RSS Feeds
                         </div>
                     </a>
                </div>

                    </div>
                </div>

            </div>
       </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function(){
          $("#openNav").click(function(){
                $("#mySidenav").css('width','250px');
                  $("#main").css('marginLeft','250px');

          });

          $("#closeNav").click(function(){
                 $("#mySidenav").css('width','0');
                  $("#main").css('marginLeft','0');
          });

          $(window).scroll(function(){

                if($(window).scrollTop() <300){

                        $(".icon-bar").removeClass('addicon');

                }

                else if($(window).scrollTop() >1600){
                    $(".icon-bar").removeClass('addicon');
                    $(".icon-bar").addClass('vivisibility');

                }
                else{
                        $(".icon-bar").addClass('addicon');
                        $(".icon-bar").removeClass('vivisibility');

                }

          });

    });


</script>
  </body>
</html>
