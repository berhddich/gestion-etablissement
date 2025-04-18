<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
     protected $fillable = ['name', 'email', 'phone', 'department', 'image', 'qualification'];
    use HasFactory;
}
