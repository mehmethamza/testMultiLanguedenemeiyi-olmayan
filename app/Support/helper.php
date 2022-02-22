<?php
function __route($name)
{
    $shouldIgnore = function ($request) {
        $excepts = config('laravellocalization.urlsIgnored', []);
        foreach ($excepts as $except) {
            if ($except !== '/') {
                $except = trim($except, '/');
            }
            if ($request->is($except)) {
                return true;
            }
        }
        return false;
    };
    if ($shouldIgnore(request())) {
        return;
    }
    return LaravelLocalization::transRoute("routes.$name");
}
