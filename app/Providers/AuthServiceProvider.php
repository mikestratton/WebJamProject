<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use App\Models\Image;
use App\Policies\ImagePolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Auth\Access\HandlesAuthorization;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
    }

    protected $policies = [
        Image::class => ImagePolicy::class,
    ];
}
