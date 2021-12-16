<?php

namespace App\Http\Controllers\front;
// ============ Controllers =====================================
use App\Http\Controllers\Controller;
// ============ traits ===========================
use App\traits\General;

// ======== Models =======================
use App\Models\main_categori;
use App\Models\Brand;
use App\Models\item;
use App\Models\User;

class productController extends Controller
{
    use General;

    // ############################## top header page controller #############
    public function s_product(){
         $hh=item::select('id')
                                ->inRandomOrder()
                                ->limit(1)
                                ->get();
                                dd($hh);
        return view('front.includes.top-header',compact('hh'));
    }

// ############# start home page controler###############################
    public function home(){

        $session=Session('phone');

        $client=User::select('*')->where('phone','=',$session)->get();

        $items=item::select('*')->inRandomOrder()->paginate(5);

        $users=[
            'client'=>$client,
            // 'admin'=>$admins,
            'items'=>$items
        ];
         return  View('front.home',compact('users'));
    }

// ########################Start  shop page controler ##################
    public function sety(){
        // $product=item::General();

        return  View('front.sety');
    }
// ############# start single product page controler ########################
    // public function single_product($id){

    //     $items=item::select()->limit(2)->find($id);

    //     $categories=main_categori::select('name')->where('id','=',$items->category_id)->first();

    //     $product=[
    //                'items'=> $items,
    //                'categories'=>$categories
    //             ];

    //     // return View('front.single-product');
    //      return View('front.single-product',compact('product'));
    // }
// ############# start cart page controler ################################
    // public function cart(){
    //    $items=General::select_random_item('App\Models\item',3);
    //     return  View('front.cart',compact('items'));
    // }
// ############# start check-out page controler ################################
    public function card(){
        // $product=item::General();

        return  View('front.card');
    }
// ################## start rate controller ########################3
    // public function rate(){
    // $new_items= General::select_limit_item('App\Models\item',3);

    // $random_view_items= General::select_random_item('App\Models\item',3);
    // $all_query=['new'=>$new_items,
    //             'random'=>$random_view_items
    //            ];

    // return  View('front.rate',compact('all_query'));
    // }
// #############################33

}// end of class


