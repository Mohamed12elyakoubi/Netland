<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Actor;
use App\Models\Media;
use Illuminate\Http\Request;

class NetlandController extends Controller
{
    public function index() {
        $media = Media::with('actors')->get();
        // dd($media);
        return view('home', ['media' => $media]);
    }
}
