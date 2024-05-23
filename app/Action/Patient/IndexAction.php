<?php

namespace App\Action\Patient;

use App\Repositories\PatientRepository;
use Illuminate\Support\Facades\Cache;

class IndexAction
{
    public function action(
        ApplicationRepository $patientRepository
    )
    {
        $patiens = Cache::get('patients:all');
        if ($patiens) {
            return PatientResource::collection($patiens);
        }
        return $patientRepository->getAll();
    }
}
