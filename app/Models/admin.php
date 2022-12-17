<?php

namespace App\Models;
use App\Traits\Uuid;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    use HasFactory;
    use Uuid;
    protected $fillable = [
        'first_name',
        'last_name',
        'email'
    ];
}
