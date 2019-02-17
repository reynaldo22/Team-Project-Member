<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Soal;
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

    public function showSoalHackathon() {
        return view('soalHackathon');
    }

    public function printSoalHackathon() {
        $soal = Soal::all()->where('id_soal',1);
        return view('soalHackathon',compact('soal'));
    }

    public function showSoalBisnis() {
        return view('soalBisnis');
    }

    public function printSoalBisnis() {
        $soalb = Soal::all()->where('id_soal',2);
        return view('soalBisnis',compact('soalb'));
    }

    public function uploadJawaban(Request $request) {

        $this->validate($request,[
            'jawaban' => 'required|file|mimes:zip,rar|max:1024'
        ]);

        $jawaban = $request->file('jawaban');

        $new_name = 'hackathon' . '.' . $jawaban->getClientOriginalExtension();
   
        $jawaban->move(public_path('jawaban'), $new_name);

        Auth::User()->update(['jawaban' => $new_name]);
        // dd($new_name);

        return back()->with('success', 'Jawaban Uploaded Successfully');
    }

    public function uploadJawaban2(Request $request) {

        $this->validate($request,[
            'jawaban' => 'required|file|mimes:zip,rar|max:1024'
        ]);

        $jawaban = $request->file('jawaban');

        $new_name = 'bisnis' . '.' . $jawaban->getClientOriginalExtension();
   
        $jawaban->move(public_path('jawaban'), $new_name);

        Auth::User()->update(['jawaban' => $new_name]);
        // dd($new_name);

        return back()->with('success', 'Jawaban Uploaded Successfully');
    }

}
