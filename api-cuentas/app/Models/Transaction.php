<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table="transactions";
    protected $fillable = [
        'amount',
        'type',
        'description',
        'user_id',
        'category_id',
        'account_id'
    ];
      public function  user(){
        return $this->hasOne(User::class,'id','user_id');
    }
     public function  categorie(){
        return $this->hasOne(Categorie::class,'id','category_id');
    }
     public function  account(){
        return $this->hasOne(Account::class,'id','account_id');
    }

}
