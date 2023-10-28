<?php

/**
 * Converte uma data no formato brasileiro (dd/mm/yyyy) para o formato de banco de dados (Y-m-d)
 * @param string $date A data no formato brasileiro (dd/mm/yyyy).
 * @return string A data formatada no formato de banco de dados (Y-m-d).
 */
function convertDateToDB($date): string
{
    $date = str_replace('/', '-', $date);
    $dataFormatada = date('Y-m-d', strtotime($date));

    return $dataFormatada;
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
    $formattedDate = $dateObj->format('d ') . $monthNames[$monthIndex] . $dateObj->format(' Y');

    return $formattedDate;
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
        return $path;
    }

    return 'assets/images/sem-imagem.jpg';
}
