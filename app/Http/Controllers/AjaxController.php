<?php

namespace App\Http\Controllers;

use App\Models\cart;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    //addToCart
    public function addToCart(Request $request)
    {
        cart::create([
            'user_id' => $request->user_id,
            'product_id' => $request->product_id,
            'shop_id' => $request->shop_id,
            'qty' => 1
        ]);
        $response = [
            'message' => 'Added completely',
            'status' => 'success'
        ];
        return response()->json($response, 200);
    }
}
