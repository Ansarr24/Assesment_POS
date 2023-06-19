<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = ['name', 'email', 'mobile', 'item1', 'item2', 'item3', 'item4',];

    // protected $casts = [
    //     'items' => 'array',
    // ];
}
