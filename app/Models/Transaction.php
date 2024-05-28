<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;

    protected $fillable = [
<<<<<<< HEAD
       'travel_package_id', 'user_id', 'additional_visa',
       'transaction_total', 'transaction_status'

=======
        'travel_package_id','user_id','additional_visa',
        'transaction_total','transaction_status'
>>>>>>> a29f9aa3779219e363600612a78fcc351ed7b861
    ];

    protected $hidden =[

    ];

<<<<<<< HEAD
    public function details()
    {
        return $this->hasMany(TransactionDetail::class, 'transaction_id', 'id');
    }

    public function travel_package()
    {
        return $this->belongsTo(TravelPackage::class, 'travel_package_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
=======
    public function details(){
        return $this->hasMany(TransactionDetail::class,'transaction_id','id');
    }

    public function travel_package(){
        return $this->belongsTo(TravelPackage::class,'travel_package_id','id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
>>>>>>> a29f9aa3779219e363600612a78fcc351ed7b861
    }
}
