<?php
/**
 * Created by PhpStorm.
 * User: Dauren
 * Date: 03.12.2018
 * Time: 20:00
 */

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserProfile extends Authenticatable
{
    use Notifiable;

    public $table = 'users_profile';

    public $fillable = [
        'user_id', 'phone', 'address', 'city_id', 'created_at', 'updated_at'
    ];
}