


<!DOCTYPE html>
<html lang="en-US" dir="ltr" xmlns:og="http://ogp.me/ns#" prefix="og: http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" class="no-js">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <meta charset="UTF-8">
  <title>DevService</title>

   <link href="//fonts.googleapis.com/css?family=Open+Sans:400,700,400italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://unity3d.com/profiles/unity3d/themes/unity/css/unity/unity-reset.css?v=20190221" />
  <link rel="stylesheet" type="text/css" href="https://unity3d.com/profiles/unity3d/themes/unity/css/unity/unity-entypo-plus.css?v=20190221" />
  <link rel="stylesheet" type="text/css" href="https://unity3d.com/profiles/unity3d/themes/unity/css/unity/unity-typo.css?v=20190221" />
  <link rel="stylesheet" type="text/css" href="https://unity3d.com/profiles/unity3d/themes/unity/css/unity/unity-form.css?v=20190221" />
  <link rel="stylesheet" type="text/css" href="https://unity3d.com/profiles/unity3d/themes/unity/css/unity/unity-buttons.css?v=20190221" />
  <link rel="stylesheet" type="text/css" href="https://unity3d.com/profiles/unity3d/themes/unity/css/unity/unity-ui.css?v=20190221" />
  <link rel="stylesheet" type="text/css" href="https://unity3d.com/profiles/unity3d/themes/unity/css/unity/unity-grid.css?v=20190221" />
  <link rel="stylesheet" type="text/css" href="https://unity3d.com/profiles/unity3d/themes/unity/css/unity/unity-search.css?v=20190221" />
  <link rel="stylesheet" type="text/css" href="https://unity3d.com/profiles/unity3d/themes/unity/css/unity/unity-core.css?v=20190221" />
  <link rel="stylesheet" type="text/css" href="https://unity3d.com/profiles/unity3d/themes/unity/css/custom.css?v=20190221" />
  <link rel="stylesheet" type="text/css" href="https://unity3d.com/profiles/unity3d/themes/unity/css/unity/unity-marketing.css?v=20190221" />
  <link rel="stylesheet" type="text/css" href="https://unity3d.com/profiles/unity3d/themes/unity/css/unity/unity-marketing-ui.css?v=20190221" />
  <link rel="stylesheet" type="text/css" href="https://unity3d.com/profiles/unity3d/themes/unity/css/unity/unity-marketing-plugins.css?v=20190221" />
  <link rel="stylesheet" type="text/css" href="https://unity3d.com/profiles/unity3d/themes/unity/css/unity/unity-legacy.css?v=20190221" />
  <link rel="stylesheet" type="text/css" href="https://unity3d.com/profiles/unity3d/themes/unity/css/unity/unity-helpers.css?v=20190221" />
  <link rel="stylesheet" type="text/css" href="https://blogs.unity3d.com/wp-content/themes/unity/css/blog.css?1559324690" />


  
<link href="css/search.css" type="text/css" rel="stylesheet" />
</head>

<body class="home blog list-view i18n-en">

    <section id="main-wrapper" class="main-wrapper clear">
        @if(isset($details))
      <div class="main-content clear">
        <div id="content-wrapper" class="content-wrapper clear">
          <div class="g12 p15 flex-wrap">

            <div class="g12 pt0 p15 title-wrap">
              <div class="g8 nest title-rss">
                <a href="" class="left sub-logo"><h3 class="mb0">Dev<span class="b">Service</span></h3></a>
                
                </div>

                <div class="g4 search-wrap rel right nest">
                  <div class="">
                      <form method="get" id="searchform" action="">
                      <input type="text" value="" placeholder="Search the blog..." name="s" id="s" autosave="Unity Blog" results="5" class="field mb0" />
                      <input type="submit" value="GO" id="s-submit" class="submit mb0" />
                    </form>
                  </div>
                </div>
              </div>


<div class="g12 p15 pt0">
  <div id="post-81585" class="g12 nest large">
    <div class="SerachResult">
       <p style="margin:30px;">Search results for your query <b></p>
    </div>
  <div class="g12 nest">
    <div class="all-articles g8 nest left pr30 clear">

        @foreach($details as $agency)
<div class="g12 p20 mb30 ml15 list-post">
  <a href="">
    <div class="g3 p15 list-post-img" >
        <img src="{{asset('uploads/highlights/'.$agency->image)}}" width="100%;" alt="image ">
    </div>
  </a>
  <div class="g9 nest pl30 list-post-heading">
    <h4 class="post-heading"><a href="/agency/{{$agency->id}}" class="cn tdn">{{$agency->title}}</a></h4>
  </div>

  <div class="g9 nest pl30 list-post-content">
    <p
      class="mb0 clear"> {{$agency->body}}
      <a href="/agency/{{$agency->id}}" class="more">Read more<span class="ico ico-chevron-right"></span></a></p>
    <div class="list-post-details">
      
              <div class="rating rating2"><!--
              --><a href="#5" title="Give 5 stars">★</a><!--
              --><a href="#4" title="Give 4 stars">★</a><!--
              --><a href="#3" title="Give 3 stars">★</a><!--
              --><a href="#2" title="Give 2 stars">★</a><!--
              --><a href="#1" title="Give 1 star">★</a>
          
          <a href="" class="c-mg list-post-comm icon ico-chat">2</a>
      </div>
      <!-- <div class="g12 nest mt20 cat">
        <a href="" rel="category tag">Asset Store</a>       
       </div>-->
    </div>
  </div>
</div>
@endforeach
@elseif(@isset($message))
<p>{{$message}}</p>
        
    @endif

<div class="g12 paging mt30"><ul class="pagination"><li><span aria-current='page' class='page-numbers current'>1</span></li><li><a class='page-numbers' href=''>2</a></li><li><a class='page-numbers' href=''>3</a></li><li><span class="page-numbers dots">&hellip;</span></li><li><a class='page-numbers' href=''>107</a></li><li><a class="ico ico-chevron-right page-numbers" href=""></a></li></ul></div>
        </div>
  <div class="g4 right nest sidebar-column">
<div class="sidebar">

  

  <div class="pl20 pb30 clear">

    <h3>Adventure</h3>
    <div class="categories widget clear">
      <div class="category rel">
        <p><a href="" class="cn name">Mountain Biking</a></p>
      </div>
      <div class="category rel">
              <p><a href="" class="cn name">Hot air balloon</a></p>
      </div>
      <div class="category rel">
              <p><a href="" class="cn name">White water Rafting</a></p>
      </div>
      <div class="category rel">
        <p><a href="" class="cn name">Jungle Safari</a></p>
      </div>
      <div class="category rel">
        <p><a href="" class="cn name">Freefall Parachuting</a></p>
      </div>
      <div class="category rel">
        <p><a href="" class="cn name">Zip-lining</a></p>
      </div>
      <div class="category rel">
        <p><a href="" class="cn name">Caving</a></p>
      </div>
      <div class="category rel">
        <p><a href="" class="cn name">Canyoning</a></p>
      </div>
      <?php $count = count($details); ?>
      @if($count>4)
      <h3 class="pt30">Popular Place</h3>
      <div class="widget">
              <div class="popular-posts">
                <div class="g12 p5 list-post">
                              <div class="g1 nest list-post-img"></div>
                              <div class="g11 nest pl10 list-post-content">
                                <a href="" class="cn tdn"><h4
                                    class="post-heading mb0">Lumbini</h4></a>
                                <span class="c-mg"> BUDDHA’S BIRTH PLACE</span>
                              </div>
                            </div>
              <div class="g12 p5 list-post">
                <div class="g1 nest list-post-img"></div>
                <div class="g11 nest pl10 list-post-content">
                  <a href="" class="cn tdn"><h4
                      class="post-heading mb0">Kathmandu</h4></a>
                  <span class="c-mg">TOWN FULL OF TEMPLES</span>
                </div>
              </div>
              <div class="g12 p5 list-post">
                <div class="g1 nest list-post-img"></div>
                <div class="g11 nest pl10 list-post-content">
                  <a href="" class="cn tdn"><h4
                      class="post-heading mb0">Patan</h4></a>
                  <span class="c-mg">YEARS OLD CULTURAL HERITAGE</span>
                </div>
              </div>
              <div class="g12 p5 list-post">
                <div class="g1 nest list-post-img"></div>
                <div class="g11 nest pl10 list-post-content">
                  <a href="" class="cn tdn"><h4
                      class="post-heading mb0">Bhaktapur</h4></a>
                  <span class="c-mg"> NEWARI CULTURE</span>
                </div>
              </div>
              <div class="g12 p5 list-post">
                <div class="g1 nest list-post-img"></div>
                <div class="g11 nest pl10 list-post-content">
                  <a href="" class="cn tdn"><h4
                      class="post-heading mb0">POKHARA</h4></a>
                  <span class="c-mg">A GIFT OF NATURE </span>
                </div>
              </div>
              <div class="g12 p5 list-post">
                <div class="g1 nest list-post-img"></div>
                <div class="g11 nest pl10 list-post-content">
                  <a href="" class="cn tdn"><h4
                      class="post-heading mb0">RARA LAKE </h4></a>
                  <span class="c-mg">PEACE AND BEAUTY AT A PLACE</span>
                </div>
              </div>
            </div>
      </div>
      @endif
      @if($count>7)
      <h3 class="pt30">Local Magic</h3>
    <div class="categories widget clear">
      <div class="category rel">
        <p><a href="" class="cn name">NEWARI CUISINE</a></p>
      </div>
      <div class="category rel">
              <p><a href="" class="cn name">POTTERY</a></p>
      </div>

  </div>
  @endif
</div>

</div>
</div>
</div>
</div>
</div>
</section>
</body>
</html>
