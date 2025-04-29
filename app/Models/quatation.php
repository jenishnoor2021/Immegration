<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;
use App\Mail\QuatationMail;

class quatation extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function boot()
    {

        parent::boot();

        static::created(function ($item) {

            $adminEmail = "jenish.noor2021@gmail.com";
            Mail::to($adminEmail)->send(new QuatationMail($item));
        });
    }
}
