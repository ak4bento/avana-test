<?php

namespace Akill\Xlsvalidate;

use Illuminate\Support\Collection;

interface Type
{
    /**
     * Rules for validation
     */
    public static function rule();

    /**
     * Custom message for validation
     */
    public static function customMessage();
}