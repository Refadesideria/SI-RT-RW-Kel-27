<?php

namespace App\Http\Controllers;

use App\Models\Rt;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HalamanUserController extends Controller
{
    public function halamanrt(){
        $rt=Rt::all();
        return view('user.layouts.components.navbar',compact('rt'));
    }
}
    