<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\Order;
use App\Models\OrderManagement;
use App\Models\Product;
use Carbon\Carbon;
use Faker\Guesser\Name;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class CartController extends Controller
{
  // add cart with ajax
  // public function add(Request $request)
  // {
  //     // logger($request->all());
  //     $data = $this->getData($request);;
  //     cart::create($data);
  //     return response()->json([
  //         'message' => 'add to cart completed',
  //         'status' => 'success'
  //     ], 200);
  // }

  // cart create
  public function create(Request $request)
  {
    $data = $this->getData($request);
    cart::create($data);
    return back();
  }

  //remove
  public function delete($id)
  {
    cart::where('id', $id)->delete();
    return back();
  }

  //update
  public function update(Request $request)
  {
    $user_id = Auth::user()->id;
    if ($request->all()['update'] == 'update') {
// <<<<<<< HEAD
// =======
//       // dd('update');
// >>>>>>> e8af25f32325ab4b2ab12a51fc45b64412620734
      $cartId = $request->toArray()['cartId'];
      $qty = $request->toArray()['qty'];
      for ($i = 0; $i < count($cartId); $i++) {
        cart::where(['id' => $cartId[$i], 'user_id' => Auth::user()->id])->update([
          'qty' => $qty[$i]
        ]);
      }
      return back();
    }else{
      $OderCode =Carbon::now()->format('d-m-Y'). '-'. uniqid();
      $cartId = $request->toArray()['cartId'];
      $productId = $request->toArray()['productId'];
      $qty = $request->toArray()['qty'];
      for($i = 0; $i < count($cartId); $i++){
        $subtotal = Product::select('price')->where('id', $productId[$i])->get();
        $sub_total = (int)$qty[$i] * (int)$subtotal->toArray()[0]['price'];
        Order::create([
          "order_code" => $OderCode,
          'user_id' => $user_id,
          'product_id' => $productId[$i],
          'qty' => $qty[$i],
          'sub_total' => $sub_total
        ]);
      }
      if($request->address == null){
        OrderManagement::create([
          'user_id' => $user_id,
          "order_code" => $OderCode,
          'total' => $request->total,
        ]);
      }else{
        OrderManagement::create([
          'user_id' => $user_id,
          "order_code" => $OderCode,
          'total' => $request->total,
          'address' => $request->address
        ]);
      }
      cart::where('user_id', $user_id)->delete();
      return redirect()->route('website#product');
    }
  }

  //private function
  public function getData($request)
  {
    return [
      'user_id' => $request->userId,
      'product_id' => $request->productId,
      'qty' => $request->qty
    ];
  }
  //order id generator
  private function get_order_number()
  {
      return IdGenerator::generate(['table' => 'your_table_name', 'length' => 9, 'prefix' =>$prefix]);
  }
}
