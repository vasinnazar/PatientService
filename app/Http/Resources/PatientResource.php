<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PatientResource extends JsonResource
{
    public function toArray($request) : array
    {
        return [
            'id' => $this->id,
            'name' => $this->first_name . ' ' . $this->last_name,
            'birthday' => $this->birthday,
            'age' => $this->age . ' ' . $this->age_type,
        ];
    }
}
