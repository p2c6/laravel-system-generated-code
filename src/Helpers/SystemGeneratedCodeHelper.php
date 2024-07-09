<?php

namespace P2c6\LaravelSystemGeneratedCode\Helpers;

use Illuminate\Support\Facades\Config;

class SystemGeneratedCodeHelper
{
    public static function generateCode($id)
    {
        if ($id === null) {
            return null; // Handle the case where $id is null or not provided
        }

        $config = Config::get('system-generated-code.formats.default');
        $prefix = isset($config['prefix']) ? $config['prefix'] : '';
        $leadingZeros = isset($config['leading_zeros']) ? $config['leading_zeros'] : 0;
        $separator = isset($config['separator']) ? $config['separator'] : '-';

        $formattedId = str_pad($id, $leadingZeros, '0', STR_PAD_LEFT);

        return $prefix . $separator . $formattedId;
    }
}



