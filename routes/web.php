<?php
use Illuminate\Support\Facades\Input;
use App\User; //using model
use App\Agency; 
use App\resturant;


Route::get('/', function () {
    return view('welcome');
});


// Reference serach
// Route::any('/search',function(){
//     $q = Input::get ( 'q' );
//     $user = User::where('name','LIKE','%'.$q.'%')->orWhere('email','LIKE','%'.$q.'%')->get();
//     if(count($user) > 0)
//         return view('welcome1')->withDetails($user)->withQuery ( $q );
//     else return view ('welcome1')->withMessage('No Details found. Try to search again !');
// });

//RealSearch to display search result in Single || another Page
Route::any('/AgencySearch',function(){
    $q = Input::get ( 'q' );
   
     //$agency = Agency::where('title','LIKE','%'.$q.'%')->orWhere('intro','LIKE','%'.$q.'%')->get();
        $agency =  Agency::orderBy('priorityID','desc')->where('title','LIKE','%'.$q.'%')->orWhere('body','LIKE','%'.$q.'%')->get();    //sorting  by title


     if(count($agency) > 0){
        return view('Pages.SearchPage')->withDetails($agency)->withQuery ( $q );
     }
        
    else return view ('Pages.SearchPage')->withMessage('No Details found. Try to search again !');
});

Route::any('/ResturantSearch',function(){
    $q = Input::get ( 'query' );
    $p = Input::get ( 'place' );
    
   
     $resturant = resturant::orderBy('priorityID','desc')->where('title','LIKE','%'.$q.'%')->orWhere('body','LIKE','%'.$p.'%')->get();
     if(count($resturant) > 0)
        return view('Pages.SearchPage')->withDetails($resturant)->withQuery ( $q );
    else return view ('Pages.SearchPage')->withMessage('No Details found. Try to search again !');
});


Route::get('/devservice','AgencyController@test');

//reference for file uploading 
Route::get('/agency', 'AgencyController@Agencyindex');
Route::get('/resturant', 'AgencyController@Resturantindex');
Route::post('/addimage','AgencyController@store')->name('addimage');

Route::post('/addResturant','AgencyController@storeResturant')->name('addResturant');

Route::get('agency/{id}', 'AgencyController@show');
// Route::get('/agencypage','AgencyController@display');

