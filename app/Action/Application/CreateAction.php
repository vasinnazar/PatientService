<?php

namespace App\Action\Application;

use App\Repositories\ApplicationRepository;

class CreateAction
{
    /**
     * create new application
     */
    public function action(
        $attributes,
        ApplicationRepository $applicationRepository)
    {
        return $applicationRepository->createApplication($attributes);
    }
}
