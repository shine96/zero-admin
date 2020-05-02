<?php


namespace Mimic\ZAdmin\Events;


use Illuminate\Queue\SerializesModels;
use Mimic\ZAdmin\Models\Setting;

class SettingUpload
{
    use SerializesModels;

    public $setting;

    public function __construct(Setting $setting)
    {
        $this->setting = $setting;
    }
}