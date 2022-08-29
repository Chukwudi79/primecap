<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['alert'] = 0;
        $data['plans'] = Plan::all();
        // dd("arrived");
        return view('index', compact('data'));
        // return view('home', $data);
    }

    public function signup()
    {
        return view('signup');
    }

    public function login()
    {
        return view('login');
    }
}
