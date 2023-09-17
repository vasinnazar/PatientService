<?php

namespace App\Repositories;

use App\Filters\DateFilter;
use App\Filters\StatusFilter;
use App\Models\Application;
use Illuminate\Support\Arr;
//use Spatie\QueryBuilder\Filter;
//use Spatie\QueryBuilder\Filters\Filter;
//use Spatie\QueryBuilder\Filters\Filter;
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
//          return Application::all();
      }

      public function createApplication($attributes)
      {
          return Application::create([
//              'name' => Arr::get($attributes, 'name'),
//              'email' => Arr::get($attributes, 'email'),
//              'message' => Arr::get($attributes, 'message')
              'name' => $attributes->name,
              'email' => $attributes->email,
              'message' => $attributes->message
          ]);
      }

      public function updateApplication(Application $application, $attributes)
      {//var_dump($application->name);
          return $application->update([
              'status' => 'Resolved',
//              'comment' => Arr::get($attributes, 'comment')
              'comment' => $attributes->comment
          ]);
      }
}
