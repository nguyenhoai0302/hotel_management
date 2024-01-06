
<?php

if (!function_exists('formatDate')) {
    function formatDate($date, $format = 'Y-m-d')
    {
        return date_format(date_create($date), $format);
    }
}

if(! function_exists('strLimit')) {

    function strLimit($value, $limit = 30, $end = '...')
    {
        if (mb_strwidth($value, 'UTF-8') <= $limit) {
            return $value;
        }
        return rtrim(mb_strimwidth($value, 0, $limit, '', 'UTF-8')).$end;
    }
}
