<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show()
    {
        return view('index');
    }

    public function caculate(Request $request)
    {
        $description = $request->description;
        $price = $request->price;
        $percent = $request->percent;
        $DiscountAmount = $request->price * $request->percent * 0.1;
        $DiscountPrice = $request->price - $DiscountAmount;

        return view('display_discount', compact('DiscountAmount', 'description', 'price', 'percent', 'DiscountPrice'));
    }
}
