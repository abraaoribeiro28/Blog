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
     * Validação de CNPJ.
     * Verifica se o formato e configuração batem com lógica de criação dos cnpjs.
     *
     * @param string|integer $cnpj
     * @param string|null $name
     * @return bool
     */
    public function validar_cnpj(string $cnpj, string $name = null): bool
    {
        // Verifica se um número foi informado
        $cnpj = $this->extracted_use_model($cnpj, $name);
        if (!$cnpj)
            return false;

        // Elimina possivel mascara
        $cnpj = $this->onlyNumbers($cnpj);

        // Verifica se o número de digitos informados é igual a 11
        if (strlen($cnpj) != 14) {
            return false;
        }

        // Verifica se nenhuma das sequências invalidas abaixo
        // foi digitada. Caso afirmativo, retorna falso
        else if (
            $cnpj == '00000000000000' ||
            $cnpj == '11111111111111' ||
            $cnpj == '22222222222222' ||
            $cnpj == '33333333333333' ||
            $cnpj == '44444444444444' ||
            $cnpj == '55555555555555' ||
            $cnpj == '66666666666666' ||
            $cnpj == '77777777777777' ||
            $cnpj == '88888888888888' ||
            $cnpj == '99999999999999'
        ) {
            return false;

            // Calcula os digitos verificadores para verificar se o
            // CPF é válido
        } else {

            $j = 5;
            $k = 6;
            $soma1 = 0;
            $soma2 = 0;

            for ($i = 0; $i < 13; $i++) {

                $j = $j == 1 ? 9 : $j;
                $k = $k == 1 ? 9 : $k;

                $soma2 += ($cnpj[$i] * $k);

                if ($i < 12) {
                    $soma1 += ($cnpj[$i] * $j);
                }

                $k--;
                $j--;
            }

            $digito1 = $soma1 % 11 < 2 ? 0 : 11 - $soma1 % 11;
            $digito2 = $soma2 % 11 < 2 ? 0 : 11 - $soma2 % 11;

            return (($cnpj[12] == $digito1) and ($cnpj[13] == $digito2));
        }
    }

    /**
     * Validação de CPF.
     * Verifica se o formato e configuração batem com lógica de criação dos cpfs.
     *
     * @param $cpf
     * @param string|null $name
     * @return bool
     */
    public function validar_cpf($cpf, string $name = null): bool
    {

        $cpf = $this->extracted_use_model($cpf, $name);
        if (!$cpf)
            return false;

        $cpf = $this->onlyNumbers($cpf);

        // Elimina CPFs invalidos conhecidos
        if (
            strlen($cpf) !== 11 ||
            $cpf === "00000000000" ||
            $cpf === "11111111111" ||
            $cpf === "22222222222" ||
            $cpf === "33333333333" ||
            $cpf === "44444444444" ||
            $cpf === "55555555555" ||
            $cpf === "66666666666" ||
            $cpf === "77777777777" ||
            $cpf === "88888888888" ||
            $cpf === "99999999999"
        ) {
            return false;
        }
        // Valida 1o digito
        $add = 0;
        for ($i = 0; $i < 9; $i++) {
            $add += (int)($cpf[$i]) * (10 - $i);
        }
        $rev = 11 - ($add % 11);
        if ($rev === 10 || $rev === 11) {
            $rev = 0;
        }
        if ($rev !== (int)($cpf[9])) {
            return false;
        }
        // Valida 2o digito
        $add = 0;
        for ($i = 0; $i < 10; $i++) {
            $add += (int)($cpf[$i]) * (11 - $i);
        }
        $rev = 11 - ($add % 11);
        if ($rev === 10 || $rev === 11) {
            $rev = 0;
        }
        if ($rev !== (int)($cpf[10])) {
            return false;
        }
        return true;
    }

    /**
     * Extração dos métodos em que podem ser utilizados diretamente por uma model ou não.
     *
     * @param $valor
     * @param string|null $name
     * @return void
     */
    public function extracted_use_model($valor = null, string $name = null)
    {
        if (!$valor && $name && $this->is_model())
            return $this->$name;
        return $valor;
    }

    /**
     * Retorno se nossa referência é uma model mesmo ou não.
     *
     * @return bool
     */
    public function is_model(): bool
    {
        return is_subclass_of($this, 'Illuminate\Database\Eloquent\Model');
    }

    /**
     * Retorna false caso ele não identifique um decimal.
     * Você poderá passar um valor como: 30,5 ou 30.4, que o código retornará: true.
     * Caso passe um valor inteiro o resultado será false.
     *
     * @param $value
     * @return bool
     */
    public function is_decimal($value): bool
    {
        return (bool)preg_match('/(?<integer>\d+)(,|\.)(?<decimal>\d+)/', $value);
    }

    /**
     * Retorna false caso ele não identifique uma data.
     * Você poderá passar um valor como: 20/12/2022 (dd/mm/yyyy) ou 2022-12-20 (yyyy-mm-dd), que o código retornará: true.
     * Caso passe um valor que não esteja dentro desses formatos o resultado será false.
     *
     * @param $value
     * @return bool
     */
    public function is_date($value): bool
    {
        $try_br = (bool)preg_match('/(?<dia>\d{2})(\/)(?<mes>\d{2})(\/)(?<ano>\d{4})/', $value);
        if (!$try_br)
            return (bool)preg_match('/(?<year>\d{4})(\-)(?<month>\d{2})(\-)(?<day>\d{2})/', $value);
        return true;
    }

    /**
     * Retorna apenas números
     *
     * @param string|null $valor
     * @param string|null $name
     * @return string
     */
    public function onlyNumbers(string $valor = null, string $name = null): string
    {
        $valor = $this->extracted_use_model($valor, $name);
        return $valor != null ? $this->removeFromString($valor, '[^0-9]') : "";
    }

    /**
     * Remove caracter de string.
     *
     * @param string $valor
     * @param string $pattern
     * @param string|null $name
     * @return string
     */
    public function removeFromString(string $valor, string $pattern = '\"', string $name = null): string
    {
        // use model
        $valor = $this->extracted_use_model($valor, $name);
        return $valor != null ? preg_replace("/$pattern/i", '', $valor) : "";
    }

    /**
     * Remove simbolo de porcentagem %
     *
     * @param string $valor
     * @param string|null $name
     * @return float
     */
    public function clearPorcentNumber(string $valor, string $name = null): float
    {
        // use model
        $valor = $this->extracted_use_model($valor, $name);
        return !$valor ? (float)$this->removeFromString($valor, '[^0-9(\.|,)]') : "";
    }

    /**
     * Transforma string to float US currency
     *
     * @param string|null $valor
     * @return float|null
     */
    public function toUSCurrencyFormat(string $valor = null)
    {
        return $valor ? (float)str_replace(",", ".", preg_replace('/[a-zA-Z\$\.]/i', '', $valor)) : "";
    }

    /**
     * Transforma float US currency to string BR currency
     *
     * @param string|null $valor
     * @param string|null $name
     * @return string|null
     */
    public function toBRCurrencyFormat(string $valor = null, string $name = null)
    {
        // use model
        $valor = $this->extracted_use_model($valor, $name);
        if (!$valor)
            return null;

        $valor = number_format($valor, 2, ',', '.');
        return !$this->is_decimal($valor) ? $valor . ",00" : $valor;
    }

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
     * Mascara formato cnjp
     *
     * @param $cnpj
     * @return array|string|string[]|null
     */
    public function maskToCnpj($cnpj, string $name = null)
    {
        $valor = $this->extracted_use_model($cnpj, $name);
        if (!$valor)
            return null;
        $valor = $this->lpad($cnpj, 14);
        // Recupera os dados
        $patterns = array('/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/');
        // Insere a máscara
        $replace = array('\1.\2.\3/\4-\5');
        return preg_replace($patterns, $replace, $valor);
    }

    /**
     * Mascara que formata cpf
     *
     * @param $cpf
     * @param string|null $name
     * @return array|string|string[]|null
     */
    public function maskToCpf($cpf = null, string $name = null)
    {
        $valor = $this->extracted_use_model($cpf, $name);
        if (!$valor)
            return null;
        $valor = $this->lpad($cpf, 11);
        // Recupera os dados
        $patterns = array('/(\d{3})(\d{3})(\d{3})(\d{2})/');
        // Insere a máscara
        $replace = array('\1.\2.\3-\4');
        return preg_replace($patterns, $replace, $valor);
    }

    /**
     * Máscara que formata telefone
     *
     * @param $number
     * @param string|null $name
     * @return array|string|string[]|null
     */
    public function maskToPhone($number = null, string $name = null)
    {
        $valor = $this->extracted_use_model($number, $name);
        if (!$valor)
            return null;
        // Recupera os dados
        $patterns = array('/(\d{2})(\d{5}|\d{4})(\d{4})/');
        // Insere a máscara
        $replace = array('(\1) \2-\3');
        return preg_replace($patterns, $replace, $valor);
    }

    /**
     * Máscara que formata CEP
     *
     * @param $number
     * @param $name
     * @return array|string|string[]|null
     */
    public function maskToCep($number = null, string $name = null)
    {
        $valor = $this->extracted_use_model($number, $name);
        if (!$valor)
            return null;
        // Recupera os dados
        $patterns = array('/(\d{2})(\d{3})(\d{3})/');
        // Insere a máscara
        $replace = array('\1\2-\3');
        return preg_replace($patterns, $replace, $valor);
    }


    /**
     * Máscara que formata hora para HH:MM
     *
     * @param $hora
     * @param $name
     * @return array|string|string[]|null
     */
    public function maskToHour($hora = null, string $name = null)
    {
        // Uso de model
        $valor = $this->extracted_use_model($hora, $name);
        if (!$valor)
            return null;
        // Recupera os dados
        $patterns = array('/(\d{2})(\d{2})/');
        // Insere a máscara
        $replace = array('\1:\2');
        // Aplicação da máscara para o padrão
        return preg_replace($patterns, $replace, $valor);
    }

    /**
     * Retorna a comparação entre os anos: (base - teste) = int resultado.
     *
     * @param DateTime $base
     * @param DateTime $test
     * @return int
     */
    public function diffAge(DateTime $base, DateTime $test): int
    {
        return $base->diff($test)->y;
    }


    /**
     * Retorna a idade a partir de uma data
     *
     * @param $date
     * @param string $name
     * @return int|null
     * @throws Exception
     */
    public function getAge($date = null, string $name = null)
    {
        // Uso de model
        $valor = $this->extracted_use_model($date, $name);
        if (!$valor)
            return null;
        // formata para Y-m-d
        $date = $this->toUSDataFormat($valor);
        // Diferença entre o ano atua e o ano de nascimento
        return $this->diffAge((new DateTime("now")), (new DateTime("$date")));
    }


    /**
     * Retornar o caminho até a pasta com a imagem
     *
     * @param string $ref
     * @param string $name
     * @return string
     */
    public function pathToPhotos(string $ref, string $name): string
    {
        return date("Y") . "/" .
            date("M") . "/" .
            date("D") . "/" .
            date("d") . "/" .
            $ref . "/" .
            $name;
    }

    /**
     * Retorna timestamp no formato brasileiro
     *
     * @return mixed
     */
    public function getCreateDate()
    {
        $date = new \Nette\Utils\DateTime($this->created_at);
        return $date->format('d/m/Y');
    }

    /**
     * Retorna timestamp no formato brasileiro
     *
     * @return mixed
     */
    public function getUpdatedDate()
    {
        $date = new \Nette\Utils\DateTime($this->updated_at);
        return $date->format('d/m/Y h:m:i');
    }

    /**
     * Adiciona um valor a esquerda
     * @param mixed $value
     * @param int $lenth
     * @param string $leftpad
     * @return string
     */
    public function lpad($value, int $lenth, string $leftpad = "0"): string
    {
        return str_pad($value, $lenth, $leftpad, STR_PAD_BOTH);
    }

    /**
     * Pesquise pelas chaves em determinda request
     * @param $request
     * @param array $search
     * @return Collection
     */
    public function getInKeys($request, array $search): Collection
    {
        return collect($request->all())->filter(function ($value, $key) use ($search) {
            return in_array($key, $search);
        });
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

    /**
     * Mensagem flash de erro.
     *
     * @param $msg
     * @param $type
     * @return FlashNotifier|void
     */
    public function error($msg, $type)
    {
        if ($type == 'destroy') {
            return flash("Erro ao deletar $msg!")->error();
        } elseif ($type == 'store') {
            return flash("Erro ao criar $msg!")->error();
        } elseif ($type == 'update') {
            return flash("Erro ao atualizar $msg atualizada com sucesso!")->error();
        }
    }

    /**
     * Mensagem flash de success.
     *
     * @param $msg
     * @param $type
     * @return FlashNotifier|void
     */
    public function success($msg, $type)
    {
        if ($type == 'destroy') {
            return flash("$msg deletado com sucesso!")->success();
        } elseif ($type == 'store') {
            return flash("$msg criado com sucesso!")->success();
        } elseif ($type == 'update') {
            return flash("$msg atualizado com sucesso!")->success();
        }
    }

    /**
     * Retorna o tipo do save para o caso de uso da mensagem flash.
     *
     * @param int $id
     * @return string
     */
    public function getType(int $id = null): string
    {
        return !$id ? 'store' : 'update';
    }

    /**
     * Dispara um erro genérico.
     *
     * @param $message
     * @return mixed
     * @throws Exception
     */
    public function tError($message)
    {
        throw new Exception($message);
    }

    /**
     * Limpa carecteres especiais do endereço do email analizado.
     *
     * @param $email
     * @return mixed
     */
    public function sanitizeEmail($email)
    {
        return filter_var($email, FILTER_SANITIZE_EMAIL);
    }

    /**
     * Limpa qualquer tipo do codigo de uma "string" comum.
     *
     * @param $string
     * @return mixed
     */
    public function sanitizeString($string)
    {
        return filter_var($string, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    }

    /**
     * Limpa qualquer caracter fora números, "+" e "-".
     *
     * @param $integer
     * @return mixed
     */
    public function sanitizeInteger($integer)
    {
        return filter_var($integer, FILTER_SANITIZE_NUMBER_INT);
    }

    /**
     * Limpa qualquer caracter fora números, "." ou "," , "+" e "-".
     *
     * @param $float
     * @return mixed
     */
    public function sanitizeFloat($float)
    {
        return filter_var($float, FILTER_SANITIZE_NUMBER_FLOAT);
    }

    /**
     * Limpa a url de codigos maliciosos.
     *
     * @param $url
     * @return mixed
     */
    public function sanitizeURL($url)
    {
        return filter_var($url, FILTER_SANITIZE_URL);
    }

    /**
     * Método recursivo para tratamento pre inserção de dados no banco.
     * Limpeza de dados com filtro de names do form.
     *
     * @param $data
     * @return array|null
     */
    public function traitRequest($data)
    {
        if (is_array($data)) :
            foreach ($data as $key => $value) :
                if (!is_array($value)) :
                    switch ((string)$key):
                        case 'birth':
                            $data[$key] = (string)$this->sanitizeString($this->toUSDataFormat($value));
                            break;
                        case 'currency':
                        case 'value':
                            $data[$key] = $this->toUSCurrencyFormat($value);
                            break;
                        case 'url':
                        case 'link':
                            $data[$key] = (string)$this->sanitizeURL($value);
                            break;
                        case 'integer':
                        case 'age':
                        case 'id':
                            $data[$key] = (int)$this->sanitizeInteger($this->onlyNumbers($value));
                            break;
                        case 'email':
                        case 'e-mail':
                            $data[$key] = (string)$this->sanitizeEmail($value);
                            break;
                        default:
                            $data[$key] = $value;
                    endswitch;
                else :
                    $data[$key] = $this->traitRequest($value);
                endif;
            endforeach;
            return $data;
        endif;
        return null;
    }

    /**
     * Faz a tradução do nome no front para o nome da coluna na tabela do banco de dados.
     *
     * @param $element
     * @param $name1
     * @param $name2
     * @return mixed|string
     */
    public function altName($element, $name1, $name2)
    {
        if (isset($element[$name1])) return $element[$name1];
        if (isset($element[$name2])) return $element[$name2];
        return '';
    }

    /**
     * Orderna itens que não possuem ordenação ainda.
     *
     * @param $entity
     * @param array $items
     * @param string $column
     * @param $value
     * @return void
     */
    public function order($entity, array $items, string $column, $value)
    {
        foreach ($items as $item) {
            $maxValue = ($entity->where($column, $value)->max('order')) + 1;
            $actual = $entity->where($column, $value)->find($item);
            if ($actual->order == null) {
                $actual->order = $maxValue;
                $actual->update();
            }
        }
    }

    /**
     * Reordena todos
     *
     * @param $entity
     * @param array $items
     * @param string $column
     * @param $value
     * @return void
     */
    public function reorder($entity, array $items, string $column = null, $value = null)
    {
        foreach ($items as $index => $item) {
            $actual = $entity->find($item);
            if ($value && $column)
                $actual = $entity->where($column, $value)->find($item);
            $actual->order = $index + 1;
            $actual->update();
        }
    }

    /**
     * Retorna uma slug.
     *
     * @param mixed $sluggable
     * @return string
     */
    public function slugfy($sluggable): string
    {
        return Str::slug($sluggable, '-');
    }

    public function isTrue($result)
    {
        if ($result == 'on')
            return true;
        return false;
    }

    public function generateLog($titulo, $method = 'index')
    {
        $msg = 'Listou conteúdo de ';
        if ($method == 'create') $msg = 'Acessou criação de ';
        if ($method == 'edit') $msg = 'Acessou edição de ';

        activity()->performedOn($this->contentLog)
            ->causedBy(Sentinel::getUser())
            ->withProperty('Detalhe', "$titulo acessada por:" . Sentinel::getUser()->name)
            ->log($msg . strtolower($titulo));
    }

    function deleteFilesLog($archive)
    {
        activity()->performedOn($archive)
            ->causedBy(Sentinel::getUser())
            ->withProperty('Detalhe', 'Foi excluido um novo aquivo: ID: ' . $archive->id . ', Titulo: ' . $archive->title
                . ', Nome: ' . $archive->name . ', Tipo: ' . $archive->type
                . ', Excluido por: ' . Sentinel::getUser()->name)
            ->log('Exclusão de arquivo');
    }

    public function createIMGraph($data, $height = 300, $width = 200)
    {
        try {
            $data = json_encode($data);
            $data = "https://quickchart.io/chart?width=$width&height=$height&c=" . urlencode($data);
            $data = file_get_contents($data);
            return 'data:image/png;base64, ' . base64_encode($data);
        } catch (\Throwable $th) {
            return false;
        }
    }
}
