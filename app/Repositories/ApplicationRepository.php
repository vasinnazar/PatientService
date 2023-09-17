<?php

namespace App\Repositories;

use App\Filters\DateFilter;
use App\Filters\StatusFilter;
use App\Models\Application;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;

class ApplicationRepository
{
      public function getApplications()
      {
          return QueryBuilder::for(Application::class)
              ->allowedFilters(
                  AllowedFilter::custom('status', new StatusFilter),
                  AllowedFilter::custom('date', new DateFilter)
              )
              ->paginate(10);
      }

      public function createApplication($attributes)
      {
          return Application::create([
              'name' => $attributes->name,
              'email' => $attributes->email,
              'message' => $attributes->message
          ]);
      }

      public function updateApplication(Application $application, $attributes)
      {
          return $application->update([
              'status' => 'Resolved',
              'comment' => $attributes->comment
          ]);
      }
}
