<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Sale;

class SalesController extends Controller
{
    public function store(Request $request)
{
    $product = Product::find($request->product_id);
    $product->quantity -= $request->quantity_sold;
    $product->save();

    $sale = new Sale;
    $sale->product_id = $request->product_id;
    $sale->quantity_sold = $request->quantity_sold;
    $sale->price = $product->price;
    $sale->save();

    return redirect()->route('sales.index');
}

}
