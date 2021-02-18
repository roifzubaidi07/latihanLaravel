<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//students
class Student extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'email', 'jurusan', 'nim'];
}
