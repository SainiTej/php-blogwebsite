<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirstProject extends Model
{
    use HasFactory;

    protected $fillable = ['blogname', 'blogdescription'];
}
