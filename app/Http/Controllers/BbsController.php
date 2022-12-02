<?php

namespace App\Http\Controllers;

use App\Models\Bb;
use App\Models\User;
use Illuminate\Http\Request;

class BbsController extends Controller
{
    public static function index()
    {
        return view('index', [
            'bbs' => Bb::latest()->get()
        ]);
    }

    public static function detail(Bb $bb)
    {
        return view('detail', [
            'bb' => $bb
        ]);
    }
}
