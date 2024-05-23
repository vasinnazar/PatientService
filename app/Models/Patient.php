<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'birthdate',
        'age',
        'age_type'
    ];

    public static function boot() : void
    {
        parent::boot;
        static::created(function ($model) {
           dispatch(new CreatePatientJob($model));
        });
    }
}
