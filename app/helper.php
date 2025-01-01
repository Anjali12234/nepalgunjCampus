<?php

use App\Models\Programme;
use App\Models\SystemSetting;
use Illuminate\Support\Facades\Cache;



if (!function_exists('systemSetting')) {
    function systemSetting()
    {
        return Cache::rememberForever('systemSetting', function () {
            return SystemSetting::latest()->first();
        });
    }
}

if (!function_exists('programmes')) {
    function programmes()
    {
        return Programme::all();
    }
}
