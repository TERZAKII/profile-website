<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = ['name', 'surname', 'telephone', 'city','street','checkList'];
    protected $table = 'cart';
    use HasFactory;
}
