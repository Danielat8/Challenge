<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class EmployStudent extends Model
{
    use HasFactory;

    protected $fillable = ['email', 'company', 'phone'];

    protected $table = 'employ_student';
}
