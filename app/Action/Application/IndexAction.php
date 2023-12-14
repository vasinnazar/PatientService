<?php

namespace App\Action\Application;

use App\Repositories\ApplicationRepository;

class IndexAction
{
    /**
     * get appplications
     */
    public function action(
        ApplicationRepository $applicationRepository
    )
    {
        return $applicationRepository->getApplications();
    }
}
