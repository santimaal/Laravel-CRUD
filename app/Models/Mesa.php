<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    use HasFactory;
    protected $table = 'taules';
    protected $fillable = ['fname', 'lname', 'email', 'password'];
}
