<?php

namespace App\Providers;

use App\Models\Car;
use App\Models\Role;
use App\Models\User;
use App\Models\Setting;
use App\Models\CarImage;
use App\Models\Customer;
use App\Models\Manufacture;
use App\Models\Transaction;
use App\Policies\CarPolicy;
use App\Policies\RolePolicy;
use App\Policies\UserPolicy;
use App\Policies\SettingPolicy;
use App\Policies\CarImagePolicy;
use App\Policies\CustomerPolicy;
use App\Policies\ManufacturePolicy;
use App\Policies\TransactionPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Car::class => CarPolicy::class,
        CarImage::class => CarImagePolicy::class,
        Customer::class => CustomerPolicy::class,
        Manufacture::class => ManufacturePolicy::class,
        Role::class => RolePolicy::class,
        Setting::class => SettingPolicy::class,
        Transaction::class => TransactionPolicy::class,
        User::class => UserPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
