<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\PatientResource;

class PatientController extends Controller
{
    public function index(
        IndexAction           $indexAction,
        PatientRepository     $patientRepository
    ) : JsonResponse
    {
       return PatientResource::collection($indexAction->action($patientRepository));
    }

    public function create(
        CreateAction          $createAction,
        PatientRepository     $patientRepository,
        CreateRequest         $createRequest
    ) : JsonResponse
    {
        return new PatientResource($createAction->action($createRequest, $patientRepository));
    }
}
