<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class Users extends Controller
{
    public function index()
    {
        return view('logistik.users');
    }
}
