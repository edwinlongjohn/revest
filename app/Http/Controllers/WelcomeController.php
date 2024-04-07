<?php

namespace App\Http\Controllers;

use App\Models\Packages;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $package = Packages::all();
        return view( 'welcome', compact('package'));
    }




}
