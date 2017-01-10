<?php

namespace App\Model\Webapp;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'description', 'user_id'
    ];
}