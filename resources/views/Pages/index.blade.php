{{-- This is now officailly master page//index-page --}}
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Until I win</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
    <link href="css/style.css" type="text/css" rel="stylesheet" />
    

  </head>
  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
      <div class="container-fluid">
        <a href="#" class="navbar-brand"><img src="/image/DevService.png" alt="LogoHere"/></a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="#" class="nav-link">Home</a>
            </li>
            {{-- <li class="nav-item">
              <a href="#" class="nav-link">About</a>
            </li> --}}
            <li class="nav-item">
              <a href="#services" class="nav-link">Services</a>
            </li>
            <li class="nav-item">
              <a href="#local-talent" class="nav-link">LocalTalent</a>
            </li>
            <li class="nav-item">
              <a href="#contact" class="nav-link">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!--- Image Slider -->
    <div id="slides" class="carousel slide" data-ride="carousel">
      <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1"></li>
        {{-- <li data-target="#slides" data-slide-to="2"></li> --}}
      </ul>

      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../image/StockSnap_I0CDZXUIR0.jpg" alt="background" />

          <div class="carousel-caption">
            
            <h1 class="dislay-2">DevService</h1>
            <h3>Serving you the Best Agency</h3>
            <form action="/AgencySearch" method="POST" role="search">
              {{ csrf_field() }}
              <div class="form-box">
                <input
                  type="text"
                  class="search-field business"
                  name="q"
                  placeholder="Search Adventure here"
                />
                <input
                type="text"
                class="search-field location"
                placeholder="Kathmandu"
                disabled
              />
       
              
                <button class="search-btn" type="submit">Search</button>
              </div>
            </form>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../image/newarifood.jpg" alt="background" />
          <div class="carousel-caption">
            
            <h1 class="dislay-2">DevService</h1>
            <h3>Serving you the Popular Resturants</h3>
            <form action="/ResturantSearch" method="POST" role="search">
              {{ csrf_field() }}
              <div class="form-box">
                <input
                  type="text"
                  class="search-field business"
                  name="query"
                  placeholder="Search Resturant Here"
                />
                <input
                type="text"
                class="search-field location"
                placeholder="Kathmandu"
                name="place"
              />
       
              
                <button class="search-btn" type="submit">Search</button>
              </div>
            </form>
          </div>
        </div>
        {{-- <div class="carousel-item">
          <img src="../image/StockSnap_OSBBGSFDLS.jpg" alt="background" />
          <div class="carousel-caption">
            
            <h1 class="dislay-2">DevService</h1>
            <h3>Serving you the Best Quality</h3>
            <form action="/IndexSearch" method="POST" role="search">
              {{ csrf_field() }}
              <div class="form-box">
                <input
                  type="text"
                  class="search-field business"
                  name="q"
                  placeholder="Travel,Services"
                />
                <input
                type="text"
                class="search-field location"
                placeholder="Kathmandu"
                disabled
              />
       
              
                <button class="search-btn" type="submit">Search</button>
              </div>
            </form>
          </div>
        </div> --}}
      </div>
    </div>
    <!--- Jumbotron -->
    <div class="container-fluid">
      <div class="row jumbotron">
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
          <p class="lead">
            DevService serving you the best. Tourist are like god to us. So
            serving you the best is our honor. We promote out culture, local
            talents and many more. Have the visit of you lifetime with
            DevService.
          </p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
          <a href="#" class="btn btn-outline-secondary btn-lg"> Video </a>
        </div>
      </div>
    </div>
    <!-- Advertisement-Section -->
    <!---------this is section3----------------------->
    <section class="section3">
      <div class="s3-heading">
        <h3>
        Advertisement
        </h3>
      </div>
      <div class="gallery">
        <div class="gallery-card">
          <img src="../image/trisara.jpg" alt="causes-1" />
          <h5>Trisara</h5>
        </div>
        <div class="gallery-card">
          <img src="../image/nabil.png" alt="causes-2" />
          <h5>Nabil Bank</h5>
        </div>
        <div class="gallery-card">
          <img src="../image/NTB.jpg" alt="causes-3" />
          <h5>Nepal Tourism</h5>
        </div>
        <div class="gallery-card">
          <img src="../image/fonepay.jpg" alt="causes-4" />
          <h5>Fone Pay</h5>
        </div>
      </div>
    </section>
  </body>
</html>
    </section>
    <!-- main-ServicesOption-Category -->
    <section class="main-body">
      <div class="sidebar">
        <div class="categories">
          
           
          <ul>
              <h4>Adventure</h4>
        
            <li><a href="#"> Mountain Biking </a></li>
            <li><a href="#"> Hot air balloon </a></li>
            <li><a href="#"> White water Rafting </a></li>
            <li><a href="#"> Paragliding </a></li>
            <li><a href="#"> Freefall parachuting </a></li>
            <li><a href="#"> Zip-lining </a></li>
            <li><a href="#"> Caving</a></li>
            <li><a href="#">Canyoning</a></li>
          </ul>
        </div>
      </div>
     
      {{-- <!-- first-product-card -->
                 <div class="product-card">
                   <div class="product-image-container">
                      <img src="../image/agencyLogo1.png" alt="">
                    </div>

                     <div class="product-card-footer">
                       <button type="button" class="btn btn-seconday" title="Portfolio">Portfolio</button>
                         <button type="button" class="btn btn-seconday" title="Video">Video</button>
                       </div>
                  </div>
                <!-- second-product-card -->
                <div class="product-card">
                    <div class="product-image-container">
                       <img src="../image/agencyLogo2.png" alt="">
                     </div>
 
                      <div class="product-card-footer">
                        <button type="button" class="btn btn-seconday" title="Portfolio">Portfolio</button>
                          <button type="button" class="btn btn-seconday" title="Video">Video</button>
                        </div>
                   </div>
                   <!-- third-product-card -->
                   <div class="product-card">
                      <div class="product-image-container">
                         <img src="../image/agencyLogo3.jpg" alt="">
                       </div>
   
                        <div class="product-card-footer">
                          <button type="button" class="btn btn-seconday" title="Portfolio">Portfolio</button>
                            <button type="button" class="btn btn-seconday" title="Video">Video</button>
                          </div>
                     </div>


            </div>
        </div> --}}
        {{-- <div class="master-product-list-wrapper">
            <div class="product-list-header" id="services">
                 <h2>Best Travel</h2> 
              </div> --}}
              

              <div class="advsection">
                      <div class="product-list-header" id="services">
                          <h2>Recommended</h2> 
                       </div>
              
                  <div class="advcontainer">
                      @if(count($agencies)>0)
                    
                       @foreach ($agencies as $agency)   
                    <div class="advcard">
                      <div class="face face1">
                        <div class="advcontent">
                            <img src="{{asset('uploads/highlights/'.$agency->image)}}" width="100%;" alt="image ">
                                    <h3>
                                       
                                    <a href="/agency/{{$agency->id}}" target="_BLANK"> {{$agency->title}} </a>
                                 
                                    </h3>
                        </div>
                      </div>
                      <div class="face face2">
                        <div class="advcontent">
                          <p>
                               {{$agency->intro}}
                               
                              <small>Written On {{$agency->created_at}}</small> 
                          <a href="{{$agency->portfolio}}" target="_BLANK">Portfolio</a>
                            <a href="#">Video</a>
                          </p>
                        </div>
                      </div>
                    </div>
              
               @endforeach 
                               {{-- {{$advs->links()}} #this is used for pagination--}} 
                          @else
                          <p>No post found</p>
                          @endif 
               </div>
               </div>




  
   @yield('travelagency')

  
    </section>

    <!--- Local Talent Section -->
    <section class="section-4" >
      <div class="local-talent-text">
      <div class="container text-center">
        <h1 class="text-dark" id="local-talent">Local Magic</h1>
        <p class="text-secondary">Promoting the Local, Cultural, Authentic talents of Nepal</p>
      </div>
    </div>
      <div class="team row ">
        <div class="col-md-4 col-12 text-center">
          <div class="card mr-2 d-inline-block shadow-lg">
            <div class="card-img-top">
              
              <img
                src="/image/pottery.jpg"
                class="img-fluid border-radius p-4"
                alt="imageHere"
              />
            </div>
            <div class="card-body">
              <h3 class="card-title">Pottery</h3>
              <p class="card-text">
                Pottery is the process of forming vessels and other objects with clay and other ceramic materials, which are fired at high temperatures to give them a hard, durable form. Major types include earthenware, stoneware and porcelain. The place where such wares are made by a potter is also called a pottery (plural "potteries"). The definition of pottery used by the American Society for Testing and Materials (ASTM), is "all fired ceramic wares that contain clay when formed, except technical, structural, and refractory products.
              </p>
              <a href="#" class="text-secondary text-decoration-none"
                >Bhaktapur</a
              >
              <p class="text-black-50"></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div
            id="carouselExampleControls"
            class="carousel slide "
            data-ride="carousel"
          >
            <div class="carousel-inner text-center">
              <div class="carousel-item active">
                <div class="card mr-2 d-inline-block shadow">
                  <div class="card-img-top">
                    <img
                      src="/image/newari.jpg"
                      class="img-fluid rounded-circle w-50 p-4"
                      alt="imageHere"
                    />
                  </div>
                  <div class="card-body">
                    <h3 class="card-title">Newa cuisine</h3>
                    <p class="card-text">
                      Newa cuisine (also referred to as Newar cuisine) is a subset of Nepalese cuisine that has developed over centuries among the Newars of Kathmandu (Kathmandu is called Yen in Nepal bhasa language), Nepal. Newa cuisine is the most celebrated food variety in the country that consists of over 200 dishes. It is more elaborate than most Nepalese cuisines because the Kathmandu Valley has exceptionally fertile alluvial soil and enough wealthy households to make growing produce more profitable than cultivating rice and other staples.
                    </p>
                    <a href="#" class="text-secondary text-decoration-none"
                      >kritipur</a
                    >
                    <p class="text-black-50"></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="card  d-inline-block mr-2 shadow">
                  <div class="card-img-top">
                    <img
                      src="/image/carpet.jpg"
                      class="img-fluid rounded-circle w-50 p-4"
                      alt="imageHere"
                    />
                  </div>
                  <div class="card-body">
                    <h3 class="card-title"></h3>
                    <p class="card-text">
                      A carpet is a textile floor covering typically consisting of an upper layer of pile attached to a backing. The pile was traditionally made from wool, but, since the 20th century, synthetic fibers such as polypropylene, nylon or polyester are often used, as these fibers are less expensive than wool. The pile usually consists of twisted tufts which are typically heat-treated to maintain their structure. The term "carpet" is often used interchangeably with the term "rug", although the term "carpet" can be applied to a floor covering that covers an entire house, whereas a "rug" is generally no bigger than a single room, and traditionally does not even span from one wall to another, and is typically not even attached as part of the floor.
                    </p>
                    <a href="#" class="text-secondary text-decoration-none"
                      >Go somewhere</a
                    >
                    <p class="text-black-50">Bhaktapur</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-12 text-center">
          <div class="card mr-2 d-inline-block shadow-lg">
            <div class="card-img-top">
              <img
                src="/image/Narayanhiti.jpg"
                class="img-fluid border-radius p-4"
                alt="imageHere"
              />
            </div>
            <div class="card-body">
              <h3 class="card-title">Narayanhiti</h3>
              <p class="card-text">
                Narayanhiti Palace, or Narayanhiti Durbar (Nepali: नारायणहिटी दरवार) is a palace in Kathmandu, which long served as residence and principal workplace of the reigning Monarch of the Kingdom of Nepal. Located in the capital city of Kathmandu, the palace was the centre of state occasions and royal hospitality.[1][2][3] The palace complex is located towards east of the Kaiser Mahal next to Thamel, and is incorporated in an impressive and vast array of courtyards, gardens and buildings. The current Narayanhiti Durbar was built by King Mahendra in 1963.[4]
              </p>
              <a href="#" class="text-secondary text-decoration-none"
                ></a
              >
              <p class="text-black-50">kathmandu</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--- Three Column Section -->

    <!--- Two Column Section -->

    <!--- Fixed background -->

    <!--- Meet the team -->

    <!--- Cards -->
    <div class="container-fluid">
      <div class="row jumbotron">
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
        <h2>About Tourist Police</h2>
          <p class="lead">
         
         Tourist Police is a special unit of Nepal Police, which works under Department of Tourism. 
The main function and responsibility of Tourist Police is to look after the welfare of tourist and to assure them a memorable stay in Nepal. 
They also advise and assist tourist in safety and security during traveling, trekking, rafting and hotel stay in any part of Nepal.</p>
        
          </p>
         
            <p><h2>Contact</h2>
        <p>Dial 1144 / 014247041</p>
       
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
          <a href="http://policetourist@nepalpolice.gov.np" target="_BLANK" class="btn btn-outline-secondary btn-lg">Link </a>
        </div>
      </div>
    </div>
    


    <!--- Two Column Section -->
    <hr class="my-4" />
    <!--- Connect -->
    <div class="container-fluid padding" id="contact">
      <div class="row text-center padding">
        <div class="col-12">
          <h2>Connect</h2>
        </div>
        <div class="col-12 Social padding">
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-google-plus-g"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
    </div>
    <!--- Footer -->
  </body>
</html>

<!--- Check out my course on Udemy! -->
<!-- <div
  class="udemy-course"
  style="position: fixed; bottom: 0; right: 0; margin-bottom: -5px; z-index: 100;"
>
  <a
    href="http://bit.ly/advanced-bootstrap-course"
    target="_blank"
    style="z-index: 999!important; cursor: pointer!important;"
    ><img
      src="https://www.w3newbie.com/wp-content/uploads/nuno-udemy-banner.png"
      style="max-width: 100%; min-width: 100%;"
  /></a>
</div> -->
