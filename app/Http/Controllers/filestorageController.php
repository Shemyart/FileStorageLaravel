<?php

namespace App\Http\Controllers;

use App\Models\StorageModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class filestorageController extends Controller
{
    public function index(){
        $file = new StorageModel();

        return view('home', ['file'=>$file->all()]);
    }

    public function insert(Request $request){
        $valid = $request-> validate([
            'file'=> 'required',
        ]);
        $name=$request->file('file')->getClientOriginalName();
        $path=$request->file('file')->storeAs('', $name, 'public');
        $user=auth()->user()->name;
        $send= new StorageModel();
        $send->name=$name;
        $send->author=$user;
        $send->file=$path;
        $send->save();
        return redirect()->route('homepage');
    }
    public function search(Request $req)
    {
        $file = new StorageModel();
        $s= trim($req->get('search'));
        $search = StorageModel::query()->where('name', 'like', "%{$s}%")
            ->orWhere('author', 'like', "%{$s}%")->orderBy('name', 'desc')->get();
        return view('search', ['s'=>$s, 'search'=>$search->all()]);

    }
}
