<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Info;
use App\Models\Category;

class InfoController extends Controller
{
    public function index()
    {
        // $infos = Info::all();
        $infos = Info::with('category')->get();
        return view('index', compact('infos'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('create', compact('categories'));
    }

    public function store(Request $request){
        // $request->file('image')->store('public/images');
        $path = $request->file('file')->store('images', 'public');
        $info = new Info();
        $info->name = $request->name;
        $info->category_id = $request->category_id;
        $info->file_uri = basename($path); // Only store the filename
        $info->save();
        return redirect()->route('infos.index')->with('success', 'Info guardado con imagen');

    }

    public function edit(Info $info)
    {
        $categories = Category::all();
        return view('info.edit', compact(['info', 'categories']));
    }
   
    public function update(Request $request, Info $info)
    {
        // return $info->file_uri;
        if ($request->hasFile('file')) {
            // Delete the old image
            if ($info->file_uri) {
                Storage::disk('public')->delete('images/' . $info->file_uri);
                // return 'deleted';
            }
            $path = $request->file('file')->store('images', 'public');
            $info->file_uri = basename($path); // Only store the filename
        }

        $info->name = $request->name;
        $info->category_id = $request->category_id;
        $info->update();
        return redirect()->route('infos.index')->with('success', 'Info actualizado con imagen');
    }

}
