<?php

use App\Models\SystemSetting;
use Illuminate\Support\Facades\Cache;


if (!function_exists('setting')) {
    function setting()
    {
        return Cache::rememberForever('setting', function () {
            return SystemSetting::latest()->first();
        });
    }
}
