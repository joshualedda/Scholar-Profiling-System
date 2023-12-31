<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentFund extends Model
{
   use HasFactory;

   protected $table = 'student_fund';
   protected $fillable = [
    'student_id',
    'school_year',
    'semester',


    'first_scholarship_id',
    'student_firstfund_id',

    'second_scholarship_id',
    'student_secondfund_id',

   ];
}
