<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Info;

class InfoController extends Controller
{
    public function index()
    {
        $infos = Info::all();
        return view('index', compact('infos'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request){
        // $request->file('image')->store('public/images');
        $path = $request->file('file')->store('images', 'public');
        $info = new Info();
        $info->name = $request->name;
        $info->file_uri = basename($path); // Only store the filename
        $info->save();
        return redirect()->route('index')->with('success', 'Info guardado con imagen');

    }

}
