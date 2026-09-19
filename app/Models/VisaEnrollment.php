<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisaEnrollment extends Model
{
  use HasFactory;

  protected $fillable = [
    'name',
    'email',
    'phone',
    'country',
    'course',
    'course_date',
    'batch',
    'is_show',
  ];

  protected $casts = [
    'course_date' => 'date',
    'is_show' => 'boolean',
  ];
}
