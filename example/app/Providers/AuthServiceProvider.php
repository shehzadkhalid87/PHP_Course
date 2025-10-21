<?php

namespace App\Providers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    public function boot(): void
    {
        $this->registerPolicies();

        Gate::define('edit-job', function (User $user, Job $job) {
            return $job->employer && $job->employer->user && $job->employer->user->is($user);
        });
    }
}
