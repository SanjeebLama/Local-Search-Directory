
@extends('pages.index')
@section('travelagency')
<div class="master-product-list-wrapper">
  <div class="product-list-header" id="services">
       <h2>Best Travel Agency</h2> 
    </div>
  {{-- <div class="child-product-list-wrapper"> --}}
    <div class="adv-container">
        {{-- @if(count($agencies)>0)
      
         @foreach ($agencies as $agency)   //loop --}}
      <div class="adv-card">
        <div class="face face1">
          <div class="adv-content">
          <img src="/agencyLogo1.png" alt="img here">
                      <h3>
                         
                      {{-- <a href="/devservice/{{$agency->id}}"> {{$agency->title}} --}}
                      <a href="">TITLE here
                      </a>
                      </h3>
          </div>
        </div>
        <div class="face face2">
          <div class="adv-content">
            <p>
              BODY HERE
                {{-- {{$agency->body}}
                <small>Written On {{$agency->created_at}}</small> --}}
              <a href="#">Read More</a>
            </p>
          </div>
        </div>
      </div>
       {{-- @endforeach --}}
      {{-- {{$advs->links()}} #this is used for pagination--}}
  {{-- @else
  <p>No post found</p>
  @endif --}}
    </div>
</div>
{{-- @endsection --}}

