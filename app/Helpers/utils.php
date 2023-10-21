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


/**
 * Verifica se o arquivo existe no caminho passado
 * @param string $path Caminho do arquivo
 * @return false|string
 */
function file_exist(string $path): bool|string
{
    if (file_exists($path)) {
        return $path;
    }

    return false;
}
