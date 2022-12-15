<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wasteitem extends Model
{
    use HasFactory;
    protected $primaryKey = 'item_id';
    protected $table = 'wasteitems';

    protected $fillable =[
        'item_id',
        'item_name',
        'item_points',
        
    ];
}
