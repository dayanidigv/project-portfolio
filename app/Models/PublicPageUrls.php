<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicPageUrls extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'public_name',
        'status',
    ];
}
