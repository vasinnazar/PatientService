<?php

namespace App\Action\Patient;

use App\Repositories\PatientRepository;
use Illuminate\Support\Facades\Cache;

class CreateAction
{
    public function action(
        $attributes,
        PatientRepository $patientRepository
    ) : Patient
    {
        $params = [
          'first_name' => $attributes->first_name,
          'last_name' => $attributes->last_name,
          'birthdate' => $attributes->birthday,
        ];
        array_merge($params, $this->calculateAgeType($attributes->birthday));
        $patient = $patientRepository->create($params);
        Cache::put('patients:' . $patient->id, $patient, 300);
        return $patient;
    }

    private function calculateAgeType(Carbon $date) : array
    {
        $time = Carbon::now()->diff($date);
        if ($time->y) {
           return ['age' => $time->y, 'age_type' => 'год'];
        } else if ($time->m) {
            return ['age' => $time->m, 'age_type' => 'месяц'];
        }
        return ['age' => $time->d, 'age_type' => 'день'];
    }
}
