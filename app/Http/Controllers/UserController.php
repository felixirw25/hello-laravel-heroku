<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserHeroku;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = UserHeroku::all();
        return view('dashboard', compact('data'));
    }
}