<?php

namespace App\Models;

use Database\Factories\StudentFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable(['name', 'nim'])]
class Student extends Model
{
    /** @use HasFactory<StudentFactory> */
    use HasFactory;
//    protected $fillable['name', 'nim'];
//    protected $guarded = [''];

}
