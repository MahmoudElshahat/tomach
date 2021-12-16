<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\user as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

use App\Http\Middleware\AdminAuthenticated;

// =========== jwt api use
use Tymon\JWTAuth\Contracts\JWTSubject;





class Admin extends Model
{
    use HasFactory;

    use Notifiable;

    protected $table="Admins";

    public $timestamps = false;

    protected $fillable=[
                        'id',
                        'name',
                        'phone',
                        'active',
                        'email_verified_at',
                        'password',
                        'remember_token',
                        'current_team_id',
                        'created_at',
                        'updated_at'
    ];

}
