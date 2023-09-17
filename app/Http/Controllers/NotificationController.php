<?php

namespace App\Http\Controllers;

use App\Action\Notification\UpdateAction;

class NotificationController
{
    // send email action
    public function send(
        $attributes,
        UpdateAction $updateAction
    )
    {
        $updateAction->action($attributes);
    }
}
