<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasicDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone_no',
        'email',
        'user_id',
        'short_bio',
        'dob',
        'gender',
        'address',
        'cta',
        'profile_picture',
        'status',
    ];

    protected $casts = [
        'dob' => 'date',
    ];

}
