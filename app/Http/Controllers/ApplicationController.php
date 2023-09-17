<?php

namespace App\Http\Controllers;

use App\Action\Application\CreateAction;
use App\Action\Application\IndexAction;
use App\Action\Application\UpdateAction;
use App\Http\Requests\Application\CreateRequest;
use App\Http\Requests\Application\UpdateRequest;
use App\Models\Application;
use App\Repositories\ApplicationRepository;

class ApplicationController
{
    // get applications action
    public function index(
        IndexAction           $indexAction,
        ApplicationRepository $applicationRepository
    )
    {
        return $indexAction->action($applicationRepository);
    }

    // create application action

    public function create(
        CreateAction          $createAction,
        ApplicationRepository $applicationRepository,
        CreateRequest         $createRequest
    )
    {
        return $createAction->action($createRequest, $applicationRepository);
    }

    //update application action

    public function update(
        Application           $application,
        UpdateAction          $updateAction,
        UpdateRequest         $updateRequest,
        ApplicationRepository $applicationRepository
    )
    {
        return $updateAction->update($application, $updateRequest, $applicationRepository);
    }
}
