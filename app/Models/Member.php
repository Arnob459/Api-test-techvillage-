<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Concerrns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Member extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'email'
    ];
    

}
