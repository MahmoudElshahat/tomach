<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\front\view;
// ======== Models =============
use App\Models\cart;
use App\Models\item;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


// =========
use App\traits\General;

use App\Http\Requests\cartRequest;
use PHPUnit\Framework\Exception;
// ============
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View as ViewView;

class cartController extends Controller
{
    use General;

    public function add($id){
        $user=session('phone');

        $q=cart::select('items_id')->where('items_id','=',$id)->first();

        Session::put('cart_item_id',$q);

        if($q != null){
            DB::table('cards')->where('items_id','=',$id)->increment('quntity');
        }else{
            cart::create([
                        'items_id'=>$id,
                        'user_id'=>$user,
                        'quntity'=>1
            ]);
        }


        return redirect()->route('back.home')->with(['success'=>'item add to cart']);

    }
// ################## start show function show items in cart page ######3
    public function show(){

        $user=session('phone');

        $cart=cart::select('items_id')->where('user_id','=',$user)->get();

        $items=item::find($cart);
        // =============
        $cart_quntity=cart::select('*')->get();

        $cart_data=[
            'items'=>$items,
            'cart_qunt'=>$cart_quntity
        ];

        return View('front.card',compact('cart_data'));
    }
// ############### update ########################endregion
public function update($id,Request $request){

    $q=cart::select('*')->where('items_id','=',$id)->first();
    // $q=cart::find($id);
    // dd($q);

    $q->update([
                'quntity'=>$request->quntity,

    ]);

return redirect()->route('show.items.cart')->with(['success'=>'success update']);
}
// #################### delete function ############33
// public function delete($id){
//     if($id!=null){
//   try{
//     $query= cart::select()->find($id);
//      $query->delete($id);
//      return redirect()->route('show.items.cart');
//   }catch (Exception $e) {
//     return $e;
//  }}else{
//      return 'error';
//  }
//  }

}// ens class
