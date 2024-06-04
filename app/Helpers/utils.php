<?php

use Illuminate\Support\Str;

/**
 * Converte uma data no formato brasileiro (d/m/Y) para o formato de banco de dados (Y-m-d)
 * @param string $date A data no formato brasileiro (d/m/Y).
 * @return string A data formatada no formato de banco de dados (Y-m-d).
 */
function convertDateToDB(string $date): string
{
    $date = str_replace('/', '-', $date);
    return date('Y-m-d', strtotime($date));
}

/**
 * Converte uma data no formato de banco de dados (Y-m-d) para o formato brasileiro (d/m/Y)
 * @param string $date A data no formato de banco de dados (Y-m-d).
 * @return string A data formatada no formato brasileiro (d/m/Y).
 */
function convertDateToBR(string $date): string
{
    $date = str_replace('-', '/', $date);
    return date('d/m/Y', strtotime($date));
}

/**
 * Formata a data com o mês por extenso.
 * @param string $date Data no formato 'Y-m-d'
 * @return string
 */
function formatDateWithMonth(string $date): string
{
    $dateObj = new DateTime($date);
    $monthNames = array(
        'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho',
        'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'
    );

    $monthIndex = (int)$dateObj->format('m') - 1;
    return $dateObj->format('d ') . $monthNames[$monthIndex] . $dateObj->format(' Y');
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

/**
 * Obtém o caminho completo para um arquivo armazenado na storage.
 * @param string $path O caminho relativo do recurso no armazenamento.
 * @return string O caminho completo para o recurso ou um caminho padrão "sem imagem".
 */

function getPathStorage(string $path): string
{
    $path = 'storage/' . $path;

    if (file_exists($path)) {
        return '/'.$path;
    }

    return '/assets/images/sem-imagem.jpg';
}


/**
 * Get the profile initials.
 * @param string $name
 * @return string
 */
function getProfileInitials(string $name): string
{
    $names = explode(' ', trim($name));

    return count($names) > 1
        ? strtoupper($names[0][0]) . strtoupper($names[1][0])
        : strtoupper($names[0][0]);
}

function addStoragePath(string $path): string
{
    return "storage/$path";
}


/**
 * Obtém as iniciais do nome do usuário autenticado.
 *
 * @return string
 */
if (! function_exists('getUsernameInitials')) {
    function getUsernameInitials(): string
    {
        $parts = explode(' ', auth()->user()->name);

        $initials = $parts[0][0] ?? '';
        $initials .= $parts[1][0] ?? '';

        return strtoupper($initials);
    }
}