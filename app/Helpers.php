<?php

use App\Models\GeneralInfo;


function get_general_value($key)
{
    $general = GeneralInfo::where('key', $key)->first();
    if ($general) {
        return $general->value;
    }

    return '';
}
function get_number($key)
{
    switch ($key) {
        case 0:
            return 'one';
        case 1:
            return 'two';
        case 2:
            return 'three';
        case 3:
            return 'four';
            // Add more cases as needed for other numeric values.
    
    }
}
