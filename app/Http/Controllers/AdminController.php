<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AdminPannel(){
        return view('admin.layouts.Main');
    }
}
