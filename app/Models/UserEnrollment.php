<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserEnrollment extends Model
{
    use HasFactory;

    protected $fillable = [
        'mata_kuliah_id',
        'user_id'
    ];

}
