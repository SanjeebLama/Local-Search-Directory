<link href="css/style.css" type="text/css" rel="stylesheet" />

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
            <img src="/image/agencyLogo3.jpg" alt="LogoHere"/>
                      <h3>
                         
                      <a href="/devservice/{{$agency->id}}"> {{$agency->title}}
                   
                      </h3>
          </div>
        </div>
        <div class="face face2">
          <div class="advcontent">
            <p>
                 {{$agency->body}}
                <small>Written On {{$agency->created_at}}</small> 
              <a href="#">Read More</a>
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