<?php

if (!function_exists('flash')) {
    /**
     * @param null $message
     *
     * @return \Illuminate\Foundation\Application|mixed
     */
    function flash($message = null)
    {
        $notifier = app('flash');

        if (!is_null($message)) {
            return $notifier->info($message);
        }

        return $notifier;
    }
}
