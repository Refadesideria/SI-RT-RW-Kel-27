<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Rt;

class HomertController extends Controller
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

    /**P
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
     public function index()
    {
        $rt = Rt::where('id_user', auth()->user()->id)->get()[0];
        // if (auth()->user()->id_role === 2) {
        //     return redirect('rt')
        // }
        // dd($rt);
        return view('homert', compact('rt'));
    }
}
