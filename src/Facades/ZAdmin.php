<?php
namespace Mimic\ZAdmin\Facades;

use Illuminate\Support\Facades\Facade;

class ZAdmin extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'zadmin';
    }
}