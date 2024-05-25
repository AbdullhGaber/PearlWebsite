<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Auth;

class FirebaseServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(Auth::class, function ($app) {
            $factory = (new Factory)
                ->withServiceAccount('D:/skincare-app/'.config('firebase.projects.app.credentials.file'))
                ->withProjectId(config('firebase.project_id'));

            return $factory->createAuth();
        });
    }
}
