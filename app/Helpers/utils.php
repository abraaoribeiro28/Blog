<?php

if (!function_exists('convertDateToDB')) {
    function convertDateToDB($date)
    {
        $o_datahora = $date;
        $n_datahora = str_replace('/', '-', $o_datahora);
        $dta_formatada = date('Y-m-d', strtotime($n_datahora));

        return $dta_formatada;
    }
}