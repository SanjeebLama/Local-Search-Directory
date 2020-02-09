<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agency;
use App\resturant;
class AgencyController extends Controller
{
    // Agency ko list lai database ma halna this this Controller is used
    //public const PRIORITY_HIGH = 'high';
    ////$advs =  Agency::orderBy('title','desc')where('priority','=', Status::PRIORITY_HIGH )->get();    //sorting advpost by title
   public function test(){
    $high = 'high';
     $agencies = Agency::where('priority','=',$high)->get();

       // $agencies =  Agency::all(); 
       return view('pages.index')->with('agencies',$agencies);
   }
   
//     public function index(){
//     //$agencies =  Agency::all();  
//     return view('pages.index');//->with('agencies',$agencies);
//    }
    public function Agencyindex(){
        return view('pages.createAdv');
    }
    public function Resturantindex(){
        return view('pages.createResturant');
    }
    public function store(Request $request){
        // $this->validate($request, [
        //     'title' => 'required',
        //     'body' => 'required',
        //     'priority' => 'required'
        //     // 'image'  => 'required|image|mimes:jpg,png,gif|max:2048'
        //    ]);
        $agency = new Agency();
        $agency->title = $request->input('title');
        $agency->priority = $request->input('priority');
        $agency->priorityID = $request->input('priorityID');
        $agency->intro = $request->input('intro');
        $agency->body = $request->input('body');
        $agency->image = $request->input('image');
        $agency->video = $request->input('video');
        $agency->portfolio = $request->input('portfolio');
        //for image
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/highlights/',$filename);
            $agency->image = $filename;
        }else{
            return $request;
            $agency->image = '';
        }
        
        $agency->save();
        return ('Post Uploaded Successfully');
        // return view('/pages.createAdv')->with('agencies',$agencies);
    }
    public function storeResturant(Request $request){
        // $this->validate($request, [
        //     'title' => 'required',
        //     'body' => 'required',
        //     'priority' => 'required'
        //     // 'image'  => 'required|image|mimes:jpg,png,gif|max:2048'
        //    ]);
        $agency = new resturant();
        $agency->title = $request->input('title');
        $agency->priority = $request->input('priority');
        $agency->priorityID = $request->input('priorityID');
        $agency->intro = $request->input('intro');
        $agency->body = $request->input('body');
        $agency->image = $request->input('image');
        $agency->video = $request->input('video');
        $agency->portfolio = $request->input('portfolio');
        //for image
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/highlights/',$filename);
            $agency->image = $filename;
        }else{
            return $request;
            $agency->image = '';
        }
        
        $agency->save();
        return ('Post Uploaded Successfully');
        // return view('/pages.createAdv')->with('agencies',$agencies);
    }
    // public function display(){
    //     $agencies =  Agency::all();
    //     return view('pages.AgencyPage')->with('agencies',$agencies);
    // }
     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $agency = Agency::where('id','=',$id)->get();
        return view('pages.SingleAgencyPage')->with('agencyinfo',$agency);
    }

}
