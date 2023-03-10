<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserHeroku extends Model
{
    use HasFactory;
    protected $guard = [];
    protected $table = "tb_user";
}