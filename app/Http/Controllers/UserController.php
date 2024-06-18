<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kendaraan;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
       $data = Kendaraan::all();
        return view('userindex', compact('data'));
    }
}
