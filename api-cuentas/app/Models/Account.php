<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
     protected $table="accounts";
    protected $fillable = [
        'name',
        'amount',
        'status',
        'user_id'
    ];
    //INNER JOIN CON USER_ID
    public function  user(){
        return $this->hasOne(User::class,'id','user_id');
    }
}
