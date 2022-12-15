<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
   
    use HasFactory;
    protected $table = 'tbl_useraccount';
    protected $primaryKey = 'account_id';
    protected $fillable =[
        'account_id',
        'student_id',
        'points',
        'status',
    ];

    public function user()
    {
        return this->belongsto(User::class);
    }
}

