<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class item extends Model
{
    use HasFactory;

    use Notifiable;


    protected $table='items';

    public $timestamps = false;
    protected $fillable=[
        'id',
        'user_id',
        'name',
        'description',
        'price',
        'photo',
        'Created_at',
        'update_at',
        
    ];
}
