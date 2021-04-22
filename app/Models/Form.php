<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = ['name', 'surname', 'mail', 'file'];
    protected $table = 'forms';
    use HasFactory;
}
