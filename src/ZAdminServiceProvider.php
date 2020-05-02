<?php


namespace Mimic\ZAdmin;


use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Mimic\ZAdmin\Models\Setting;

class ZAdminServiceProvider extends ServiceProvider
{
    protected $policies = [
        Setting::class =>
    ];
}