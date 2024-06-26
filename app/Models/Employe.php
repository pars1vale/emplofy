<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;
    public $table = 'employe';
    protected $fillable = ['name', 'email', 'phone', 'salary', 'address'];
}
