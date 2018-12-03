<?php
/**
 * Created by PhpStorm.
 * User: Dauren
 * Date: 03.12.2018
 * Time: 23:11
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DatabaseStorageModel extends Model
{
    protected $table = 'cart_storage';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'cart_data',
    ];

    public function setCartDataAttribute($value)
    {
        $this->attributes['cart_data'] = serialize($value);
    }

    public function getCartDataAttribute($value)
    {
        return unserialize($value);
    }
}