<?php

use App\Models\Programme;
use App\Models\Student;
use App\Models\SystemSetting;
use App\Models\Teacher;
use Illuminate\Support\Facades\Cache;



if (!function_exists('systemSetting')) {
    function systemSetting()
    {
        return Cache::rememberForever('systemSetting', function () {
            return SystemSetting::latest()->first();
        });
    }
}
if (!function_exists('student')) {
    function student()
    {
        return Cache::rememberForever('student', function () {
            return auth()->guard('student')->user();
        });
    }
}

if (!function_exists('programmes')) {
    function programmes()
    {
        return Programme::all();
    }
}
if (!function_exists('teachers')) {
    function teachers()
    {
        return Teacher::all();
    }
}
