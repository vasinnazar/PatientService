<?php

namespace App\Repositories;

use App\Models\Patient;

class PatientRepository
{
      public function getAll() : Collection
      {
         return Patient::all();
      }

      public function create(array $params) : Patient
      {
          return Patient::create([
              'first_name' => $params['first_name'],
              'last_name'  => $params['last_name'],
              'birthdate'  => $params['birthdate'],
              'age'        => $params['age'],
              'age_type'   => $params['age_type']
          ]);
      }
}
