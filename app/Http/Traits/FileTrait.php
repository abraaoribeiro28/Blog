<?php

namespace App\Http\Traits;

use App\Models\Admin\Archive;
use App\Models\Admin\Configuration;
use CURLFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

trait FileTrait
{
    /**
     * Cria um arquivo com as informaçẽos que você deseja.
     *
     * @param $path
     * @param $context
     * @return bool
     */
    public function createfile($path, $context): bool
    {
        $directory = dirname($path);

        if (!is_dir($directory)) {
            mkdir($directory, 0777, true);
        }

        if ($repository = fopen($path, "a")) {
            fwrite($repository, trim($context));
            fclose($repository);
            return true;
        }

        return false;
    }

    /**
     * Verifica a existência e se o arquivo é valido.
     *
     * @param Request $request
     * @param string $fileName
     * @return bool
     */
    public function validFile(Request $request, string $fileName): bool
    {
        return ($request->hasFile($fileName) && $request->file($fileName)->isValid());
    }

    /**
     * Caso arquivo não exista registre no sistema.
     * Retorna o nome do arquivo.
     *
     * @param $file
     * @param $dir
     * @param $fileOld
     * @return string
     */
    public function saveUpload($file, $dir, $fileOld = null, $name = null): string
    {
        $nameFile = $name ?? $this->getFileName($file);
        if ($this->fileExistsInPath($nameFile, $dir)) {
            $this->deleteFile($nameFile, $dir);
        }
        if ($fileOld) {
            Storage::delete($fileOld);
        }
        $file->storeAs($dir, "{$nameFile}");

        return "$dir/$nameFile";
    }

    public function deleteFile($files, string $dir)
    {
        /** @var string|array $files Caso não seja array realize a deleção simples. */
        if (!is_array($files)) return Storage::delete("{$dir}/{$files}");

        foreach ($files as $file) {
            Storage::delete("{$dir}/{$file}");
        }
    }

    public function getFileName($file, $reference = null): string
    {
        return date('YmdHis') . Str::random(10) . "." . strtolower($file->extension());
    }

    /**
     * Gera um nome de arquivo único.
     * @param string $path
     * @param string $extension
     * @return string
     */
    function generateNameFile(string  $path, string $extension): string {
        do {
            $name = Str::lower(uniqid(time()) . Str::random(5));
            $name .= '.' . $extension;
            $pathComplete = $path . '/' . $name;
        } while (file_exists($pathComplete));

        return $name;
    }


    private function fileExistsInPath($nameFile, $dir): bool
    {
        return ($nameFile && file_exist("storage/{$dir}/{$nameFile}"));
    }
    public function compress(string $src_path, string $destinatio_path = null, $wWith = null, $wHeight = 500, $extras = null)
    {
        $imgInfo = getimagesize("$src_path");

        if(!in_array($imgInfo[2], [1,2,3])) return;

        if (!$destinatio_path) $destinatio_path = $src_path;

        if(!$extras){
            list("dirname" => $dirname, "filename" => $filename, "extension" => $extension) = pathinfo($destinatio_path);
            $min = "$dirname/{$filename}_min.$extension";
            $this->compress($src_path, $min, null, 100, true);
            $med = "$dirname/{$filename}_med.$extension";
            $this->compress($src_path, $med, null, 280, true);
            $larg = "$dirname/{$filename}_larg.$extension";
            $this->compress($src_path, $larg, 1024, null, true);
            // normal
            $this->compress($src_path, null, null, 500, true);
            return;
        }else{
            if($wWith && $wHeight){
                Image::make($src_path)->resize($wWith, $wHeight, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinatio_path, 90);
            }elseif($wWith){
                Image::make($src_path)->resize($wWith, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinatio_path, 90);
            }else{
                Image::make($src_path)->resize(null, $wHeight, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinatio_path, 90);
            }
        }

        $bytes = filesize($src_path);

        if($bytes < ( 100 * 1024 )) return; // não mexe com menor que 100Kb

        // resmush compress
        $this->extractedCompress($destinatio_path);
    }

    public function extractedCompress(string $destinatio_path)
    {
        $imgInfo = getimagesize("$destinatio_path");

        switch ($imgInfo[2]) {
            case 1:
                $im = imagecreatefromgif($destinatio_path);
                break;
            case 2:
                $im = imagecreatefromjpeg($destinatio_path);
                break;
            case 3:
                $im = imagecreatefrompng($destinatio_path);
                break;
            default:
                return false;
        }

        $nWidth = round($imgInfo[0]);
        $nHeight = round($imgInfo[1]);
        $newImg = imagecreatetruecolor($nWidth, $nHeight);
        if (($imgInfo[2] == 1)) {
            $white = imagecolorallocate($newImg, 255, 255, 255);
            $black = imagecolorallocate($newImg, 0, 0, 0);
            $transparent = imagecolortransparent($newImg, $white);
            $transparent = imagecolortransparent($newImg, $black);
            imagefilledrectangle($newImg, 0, 0, $nWidth, $nHeight, $transparent);
        }
        if (($imgInfo[2] == 3)) {
            imagealphablending($newImg, false);
            imagesavealpha($newImg, true);
            $transparent = imagecolorallocatealpha($newImg, 255, 255, 255, 127);
            imagefilledrectangle($newImg, 0, 0, $nWidth, $nHeight, $transparent);
        }
        imagecopyresampled($newImg, $im, 0, 0, 0, 0, $nWidth, $nHeight, $imgInfo[0], $imgInfo[1]);
        switch ($imgInfo[2]) {
            case 1:
                imagegif($newImg, $destinatio_path);
                break;
            case 2:
                imagejpeg($newImg, $destinatio_path, 90);
                break;
            case 3:
                imagepng($newImg, $destinatio_path, 9, PNG_ALL_FILTERS);
                break;
            default:
                trigger_error('Redimensionamento da imagem deu águia!', E_USER_WARNING);
                break;
        }
    }
    public function makeSlug(string $sluggable)
    {
        return $this->sanitizeString(
            strtolower(
                $this->rejectHyphenOnInit(
                    $this->rejectDoubleDot(
                        $this->rejectDoubleHyphen(
                            $this->rejectSpaceOrDashOrNotNumberAndNotString($sluggable, '')
                        ),
                        ''
                    )
                )
            )
        );
    }

    public function rejectHyphenOnInit(string $slug)
    {
        return preg_replace('/^(-)/', '', $slug);
    }

    public function rejectDoubleHyphen(string $slug)
    {
        return preg_replace('/(--)+/', '', $slug);
    }

    public function rejectDoubleDot(string $slug, string $replace = '.')
    {
        return preg_replace('/(\.\.)+/', $replace, $slug);
    }

    public function rejectSpaceOrDashOrNotNumberAndNotString(string $slug, string $replace = '-')
    {

        return preg_replace('/\s+|_+|[^a-zA-Z0-9.]+/', $replace, $slug);
    }

    /**
     * Cria um arquivo com as cores das configurações do site.
     *
     * @param $colors
     * @return bool
     */
    public function saveColors($path): bool
    {
        $configurations = Configuration::whereIn('key', [
            'cor_principal', 'cor_titulos', 'cor_botoes', 'cor_fundo'
        ])->pluck('value', 'key');

        $css = '';

        foreach ($configurations as $key => $value) {
            $selector = str_replace('_', '-', $key);
            $css .= ".bg-$selector{background-color:{$value} !important;}\n";
            $css .= ".$selector{color:{$value} !important;}\n";
            $css .= ".text-dinamic-$selector{color:{$this->chooseTextColor($value)} !important;}\n";
        }

        return $this->createfile($path, $css);
    }

    public function calculateLuminance($hexColor)
    {
        $hexColor = str_replace('#', '', $hexColor);
        $r = hexdec(substr($hexColor, 0, 2)) / 255;
        $g = hexdec(substr($hexColor, 2, 2)) / 255;
        $b = hexdec(substr($hexColor, 4, 2)) / 255;

        return 0.2126 * $r + 0.7152 * $g + 0.0722 * $b;
    }

    public function chooseTextColor($backgroundColor)
    {
        $luminance = $this->calculateLuminance($backgroundColor);
        return $luminance > 0.5 ? '#000000' : '#FFFFFF';
    }


    public function uploadHighlightArchive($result, $request, $id = null): bool
    {
        if (!$this->validFile($request, 'highlight')){
            return false;
        }

        $uploadDirectoryInfo = $this->determineDirectory($result, $result->getTable());

        $highlight = Archive::where($uploadDirectoryInfo['column'], $id)->where('highlight', true)->first();

        $filePath = $this->processFileUpload($request, $uploadDirectoryInfo, $highlight);

        if ($id && $highlight) {
            $this->updateExistingHighlight($id, $filePath, $highlight);
        } else {
            $this->createNewHighlight($result, $filePath, $uploadDirectoryInfo['column']);
        }

        return true;
    }

    public function uploadEbook($result, $request, $id = null): bool
    {

        if (!$this->validFile($request, 'ebook')) {
            return false;
        }

        $file = $request->file('ebook');
        $uploadDirectoryInfo = "ebooks/$result->id";
        $ebook = Archive::where('ebook_id', $id)->where('highlight', false)->first();

        if ($ebook) {
            $filePath = $this->saveUpload($file, $uploadDirectoryInfo, $ebook->path);
            $name = basename($filePath);
            $ebook->update([
                'name' => $name,
                'path' => $filePath,
                'extension' => $this->getExtension($name),
            ]);
        }else{
            $filePath = $this->saveUpload($file, $uploadDirectoryInfo);
            $name = basename($filePath);
            Archive::create([
                'name' => $name,
                'path' => $filePath,
                'extension' => $this->getExtension($name),
                'highlight' => false,
                'ebook_id' => $result->id,
            ]);
        }

        return true;
    }

    protected function determineDirectory($result, $table): array|bool
    {
        return match ($table) {
            'ebooks' => [
                'directory' => "ebooks/$result->id",
                'column' => 'ebook_id',
            ],
            'posts' => [
                'directory' => 'posts/'.$result->category->slug.'/'.$result->id.'/destaque',
                'column' => 'post_id',
            ],
            default => false,
        };

    }

    protected function processFileUpload($request, $uploadDirectoryInfo, $highlight): string
    {
        $file = $request->file('highlight');

        if ($highlight){
            $name = $this->saveUpload($file, $uploadDirectoryInfo['directory'], $highlight->path);
        }else{
            $name = $this->saveUpload($file, $uploadDirectoryInfo['directory']);
        }

        return $name;
    }

    protected function updateExistingHighlight($id, $filePath, $highlight)
    {
        if (!$highlight) {
            return false;
        }

        $name = basename($filePath);
        $highlight->update([
            'name' => $name,
            'path' => $filePath,
            'extension' => $this->getExtension($name),
        ]);
    }

    protected function createNewHighlight($result, $filePath, $coluna): void
    {
        $name = basename($filePath);
        Archive::create([
            'name' => $name,
            'path' => $filePath,
            'extension' => $this->getExtension($name),
            'highlight' => true,
            $coluna => $result->id,
        ]);
    }

    protected function getExtension(string $name): string
    {
        return explode('.', $name)[1];
    }
}
