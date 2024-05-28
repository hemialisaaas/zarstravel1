<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

<<<<<<< HEAD
class TransactionDetail extends Model
=======
class TranscsactionDetail extends Model
>>>>>>> a29f9aa3779219e363600612a78fcc351ed7b861
{
    use SoftDeletes;

    protected $fillable = [
<<<<<<< HEAD

        'transaction_id', 'user_id', 'travel_package_id', 'is_visa', 'doe_passport'

=======
        'transaction_id','username','nationality','is_visa','doe_passport',
>>>>>>> a29f9aa3779219e363600612a78fcc351ed7b861
    ];

    protected $hidden =[

    ];

<<<<<<< HEAD
    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transaction_id', 'id');
    }

=======
    public function transaction(){
        return $this->belongsTo(Transaction::class,'transaction_id','id');
    }
>>>>>>> a29f9aa3779219e363600612a78fcc351ed7b861
}
