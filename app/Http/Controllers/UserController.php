<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public static function userBbs(User $user)
    {
        return view('index', [
            'bbs' => $user->bbs()->get()
        ]);
    }
}
