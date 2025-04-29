<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $uploads = '/testimg/';

    protected $guarded = [];

    public function getFileAttribute($photo)
    {

        return $this->uploads . $photo;
    }
}
