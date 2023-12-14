<?php

namespace App\Action\Application;

use App\Models\Application;
use App\Repositories\ApplicationRepository;

class UpdateAction
{
    /**
     * update application
     */
    public function update(
        Application           $application,
                              $attributes,
        ApplicationRepository $applicationRepository
    )
    {
        return $applicationRepository->updateApplication($application, $attributes);
    }
}
