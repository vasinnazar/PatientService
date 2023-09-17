<?php

namespace App\Http\Controllers;

use App\Action\Notification\UpdateAction;
use App\Http\Requests\Notification\SendRequest;

class NotificationController
{
    // send email action
    public function send(
        SendRequest $sendRequest,
        UpdateAction $updateAction
    )
    {
        $updateAction->action($sendRequest);
    }
}
