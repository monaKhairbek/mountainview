<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Subscriptions;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
     //   $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }
    
    public function addRequest(Request $request){
        
        $this->validate($request, [
                'title' => 'required',
                'full_name' => 'required',
                'email' => 'required',
                'mobile' => 'required',
                'contact_type' => 'required'
        ]);

        $requestData = $request->all();
       
        Subscriptions::create($requestData);
           return view('thanks');
       // return redirect('home');
    }

    public function browse()
    {   
        $sattalite = Sattalite::all();
        $categories = Categories::all();
        return view('browse',compact('sattalite', 'categories'));
    }

    public function getbrowse($id)
    {
        $sattalite = Sattalite::where('id',$id)->first();
        return view('show',compact('sattalite'));
    }
}
