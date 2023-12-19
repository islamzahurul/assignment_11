<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class SyndicateController extends Controller
{
    public function updatePrice(Request $request)
    {
        $product = Product::find($request->product_id);
        $product->price = $request->price;
        $product->save();
    
        return redirect()->route('dashboard');
    }
    
}
