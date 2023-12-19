<?php

namespace App\Http\Controllers;
use App\Models\Sale;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
{
    $todaysSales = Sale::whereDate('created_at', Carbon::today())->sum('price');
    $yesterdaysSales = Sale::whereDate('created_at', Carbon::yesterday())->sum('price');
    $thisMonthsSales = Sale::whereMonth('created_at', Carbon::now()->month)->sum('price');
    $lastMonthsSales = Sale::whereMonth('created_at', Carbon::now()->subMonth()->month)->sum('price');

    return view('dashboard', compact('todaysSales', 'yesterdaysSales', 'thisMonthsSales', 'lastMonthsSales'));
}

}
