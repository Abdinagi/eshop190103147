<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users8 extends Model
{
    use HasFactory;

    protected $table = "user";
    protected $fillable = ['name', 'surname', 'email', 'photo'];
}
