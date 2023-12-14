<?php

namespace App\Models;

use App\Action\Notification\UpdateAction;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $table = 'applications';

    protected $fillable = [
        'id', 'name', 'message', 'status', 'comment', 'email'
    ];

    public static function boot()
    {
        parent::boot();

        self::updating( function ($item) {
            resolve(UpdateAction::class)->action($item);
        });
    }

}
