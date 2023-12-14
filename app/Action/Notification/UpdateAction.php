<?php

namespace App\Action\Notification;

use App\Mail\ApplicationNotify;
use Exception;
use Illuminate\Support\Facades\Mail;

class UpdateAction
{
    /**
     * send email
     */
    public function action( $attributes )
    {
        try {
            Mail::to($attributes->email)->send(new ApplicationNotify($attributes));
            echo ('success');
            return response()->json(['Notification is sent']);
        } catch (Exception $exception) {
            echo ('error');
            return response()->json(['Something went wrong']);
        }
    }
}
