<?php

namespace App\Http\Controllers;
use App\Models\Sale;
use Illuminate\Http\Request;

class SalesHistoryController extends Controller
{
    public function index()
    {
        $sales = Sale::orderBy('created_at', 'desc')->get();
    
        return view('sales_history', compact('sales'));
    }
    
}
