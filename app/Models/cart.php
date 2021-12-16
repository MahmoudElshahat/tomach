<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class cart extends Model
{
    use HasFactory;

    use HasFactory;

    use Notifiable;


    protected $table='cards';

    public $timestamps = false;
    protected $fillable=[
        'id',
        'user_id',
        'items_id',
        'price',
        'description',
        'photo',
        'quntity',
    ];
    static function qunt(){
       $q=cart::select('items_id')->where('user_id','=',session('phone'));
        $w=$q->sum('quntity');
        return $w;
    }

    // ============================
    static function quntity($itemid){

        return  cart::select('quntity')->where('items_id','=',$itemid)->get();
     }
    //  ===========================
    static function select_items_id($itemid){

        return  cart::select('items_id')->where('items_id','=',$itemid)->get();
     }
}
