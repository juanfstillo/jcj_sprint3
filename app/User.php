<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','country','province','avatar','is_admin',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function productsInCart() {
        return $this->hasMany('App\ProductInCart');
    }

    public function cartTotal() {
        $total = $this->productsInCart->reduce(function ($acum, $productInCart) {
            return $acum + ($productInCart->product->price * $productInCart->count);
        });

        return $total;
    }

    public function orders() {
        return $this->hasMany('App\Order');
    }


    public function isAdmin(){
      return $this->admin==29;
      }
}
