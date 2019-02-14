<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function payment() {
        return view('pay');
    }

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function paymentUpload(Request $request)
    {
        $this->validate($request, [
            'paymenyt' => 'required|image|mimes:jpeg,jpg|max:1024',
        ]);

        $image = $request->file('paymenyt');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
   
        $image->move(public_path('images'), $new_name);

        Auth::User()->update(['paymenyt' => $new_name]);
        // dd($new_name);

        return back()->with('success', 'Image Uploaded Successfully')->with('path', $new_name);
    }
}
