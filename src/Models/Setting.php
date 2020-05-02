<?php


namespace Mimic\ZAdmin\Models;


use Illuminate\Database\Eloquent\Model;
use Mimic\ZAdmin\Events\SettingUpload;

class Setting extends Model
{
    protected $table = "settings";

    protected $guarded = [];

    public $timestamps = false;

    protected $dispatchesEvents = [
        'updating' => SettingUpload::class,
    ];

}