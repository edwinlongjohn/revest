<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{



    public function adminPanel()
    {
        return view('admin_panel');
    }
}
