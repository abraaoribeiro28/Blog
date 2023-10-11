<?php

namespace App\Http\Traits;

use DateTime;
use Exception;
use Illuminate\Support\Collection;
use Laracasts\Flash\FlashNotifier;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Support\Str;

trait AppTrait
{
    /**
     * Aplica máscara de data no formato americano.
     *
     * @param mixed $valor
     * @param string|null $name
     * @return string|null
     * @throws Exception
     */
    public function toUSDataFormat($valor, string $name = null)
    {
        // use model
        $valor = $this->extracted_use_model($valor, $name);
        if (!$valor)
            return null;
        if (!$this->is_date($valor))
            return $this->tError("Formato de data inválido! Erro: $valor");

        $array = explode("/", substr($valor, 0, 10));
        return count($array) == 3 ? "$array[2]-$array[1]-$array[0]" : $valor;
    }

    /**
     * Aplica máscara de data e hora no formato americano.
     *
     * @param mixed $valor
     * @param string|null $name
     * @return string|null
     * @throws Exception
     */
    public function toUSDataHourFormat($valor)
    {
        if (!$this->is_date($valor))
            return $this->tError("Formato de data inválido! Erro: $valor");

        $array = explode("/", $valor);

        $array[3] = explode(" ", $array[2])[1];
        $array[2] = explode(" ", $array[2])[0];

        return "$array[2]-$array[1]-$array[0] $array[3]";
    }

    /**
     * Aplica máscara de data no formato brasileiro.
     *
     * @param mixed $valor
     * @param string|null $name
     * @return string|null
     */
    public function toBRDataFormat($valor, string $name = null)
    {
        $valor = $this->extracted_use_model($valor, $name);
        if (!$valor)
            return null;

        if (!$this->is_date($valor))
            return $this->tError("Formato de data inválido! Erro: $valor");
        $array = explode("-", substr($valor, 0, 10));
        return count($array) == 3 ? "$array[2]/$array[1]/$array[0]" : $valor;
    }

    /**
     * Faz uma busca e seleção de determinados campos do array
     *
     * @param array $request
     * @param array $fields
     * @return array
     */
    public function filter_request(array $request, array $fields): array
    {
        $filter = array();
        foreach ($request as $campo => $valor) {
            if (in_array($campo, $fields)) {
                if (!$valor)
                    $filter[$campo] = null;
                else
                    $filter[$campo] = $valor;
            }
        }
        return $filter;
    }
}
