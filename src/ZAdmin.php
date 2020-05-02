<?php


namespace Mimic\ZAdmin;


use Illuminate\Support\Str;
use Mimic\ZAdmin\Models\Setting;

class ZAdmin
{
    protected $version;
    protected $filesystem;

    protected $alerts = [];
    protected $alertsCollected = false;

    protected $formFields = [];
    protected $afterFormFields = [];

    protected $viewLoadingEvents = [];

    protected $actions = [
        DeleteAction::class,
        RestoreAction::class,
        EditAction::class,
        ViewAction::class,
    ];


    protected $models = [
        'Setting' => Setting::class
    ];

    public $setting_cache = null;

    public function model($name)
    {
        return app($this->models[Str::studly($name)]);
    }
}