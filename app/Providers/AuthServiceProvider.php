<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\Pet;
use App\Policies\PetPolicy;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        Pet::class => PetPolicy::class,
    ];

    public function boot()
    {
        $this->registerPolicies();
    }
}
