<?php

namespace App\Http\Controllers\admin;
// ====== Request file ==========
use Illuminate\Http\Request;
use App\Http\Requests\admin\itemsRequest;
// ========== Models files=========
use App\Models\item;
use App\Models\admin;
use App\Models\main_categori;
// ========== other framework files=======
use Illuminate\Support\Facades\View;

// use Illuminate\Support\Facades\Session;
// use Illuminate\Contracts\Support\Arrayable;
// use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;


// 123456
class itemsController extends Controller
{
    // public function __construct(){

    //     $items=item::select()->ORDERBY('id')->paginate(config('constans.pagination_count'));

    //     view::share('all_items',$items);

    // }


    // #################### start index function for show all items in dasboard ##############
    public function index(){
        $items=item::select('*')->paginate(config('constans.pagination_count'));
        return view('admin.items.index',compact('items'));
        // view()->share('items','admin.items.index','item','front.home',compact('items'));
        // view('admin.items.index','front.home',compact('items'));
    }
    // ######### start creat  item function#######################

    public function create(){

        return view('admin.items.create');
    }
    // ######### start insert  item function  #######################

    public function insert(itemsRequest $request)
    {
// all method will nedd for image - files in any application
        // $test=$request->file('photo')->guessExtension();
        // $test=$request->file('photo')->getMimeType();
        // $test=$request->file('photo')->getClientOriginalName();
        // $test=$request->file('photo')->getClientMimeType();
        // $test=$request->file('photo')->guessClientExtension();
        // $test=$request->file('photo')->getSize();
        // $test=$request->file('photo')->getError();
        // $test=$request->file('photo')->isvlaid();
        // =================================
        $admin_id=session_id();
        // $value = session()->('id',);


        // dd($value);
        $NewImageName= time().'-'.$request-> name.'.'.$request->photo->extension();

        $request->photo->move(public_path('images'),$NewImageName);

        $active= !$request->has('active')?  0 : 1;
    //    $adminid= admin::select()->find($value);

                item::create([

                    'name'       =>$request->name,
                    'photo'      =>$NewImageName,
                    'price'      =>$request->price,
                    'user_id'    =>session('phone'),
                    'description'=>$request->descrption


            ]);
        return redirect()->route('all.items')->with(['success'=>'success item added']);

    }
    // ######### start edite item function #######################
    public function edite($id){
        $items=item::select()->find($id);
        return view('admin.items.edite',compact('items'));
    }


    // ######### start update item function #######################
    public function update($id ,itemsRequest $request){


        $q=item::find($id);
        $active= !$request->has('active') ? 0 : 1;
        // $img = $q->image_path;
        // dd($img);
        // should do func to save photo

        $q->update([
                    'name'=>$request->name,
                    'active'     =>$active,
                    'price'      =>$request->price,
                    'Product_description'=>$request->descrption,
                    'sale'=>$request->sale
        ]);
    // == update item photo ===
        // if ($request->has('photo')) {

        //     $NewImageName= time().'-'.$request-> name.'.'.$request->photo->extension();

        //     $request->photo->move(public_path('images'),$NewImageName);

        //     item::where('id', $id)
        //         ->update([
        //             'image_path' => $NewImageName,
        //         ]);
        // }

    return redirect()->route('all.items')->with(['success'=>'success update']);
    }
// ################ start delete item fuction#############################

public function delete($id){

   $query= item::select()->find($id);
    $query->delete($id);
    return redirect()->route('all.items')->with(['success'=>'item Deleted succefuly']);

}

}
