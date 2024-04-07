<?php

namespace App\Http\Controllers;

use App\Models\Packages;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function uploadPackage()
    {
        return view('upload_investment_package');
    }

    public function addPackage(Request $request)
    {
        $package = new Packages();
        $package->plan = $request->plan;
        $package->min_invest = $request->min_invest;
        $package->max_invest = $request->max_invest;
        $package->monthly_avg = $request->monthly_avg;
        $package->weekly_avg = $request->weekly_avg;
        $package->save();

        return back();

    }
}
