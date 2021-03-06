<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StorageModel;

use Illuminate\Support\Facades\Storage;

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
        $file = new StorageModel();
        return view('home', ['file'=>$file->all()]);
    }
}
