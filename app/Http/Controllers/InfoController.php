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

    public function store(InfoRequest $request){

    }

}
