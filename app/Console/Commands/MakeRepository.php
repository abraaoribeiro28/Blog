<?php

namespace App\Console\Commands;

use App\Http\Traits\FileTrait;
use Illuminate\Console\Command;

class MakeRepository extends Command
{
    use FileTrait;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:repository {path}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cria repository, interface e faz o bind no provider';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    protected function makeInterface($path, $name){
        $context = "
<?php \n
namespace App\Repositories\Contracts;\n
interface I$name {
}";
        if(!file_exists($path))
            $this->createfile($path, $context);
        else
            $this->error('Interface com esse nome já existe.');
    }

    protected function makeRepository($path, $name, $namespace){
        $context = "
<?php \n
namespace $namespace;\n
use App\Repositories\Contracts\I$name;
use App\Repositories\Repository;\n
class $name extends Repository implements I$name {\n
\tpublic function __construct()
\t{
\t\t".'$this->model = new Model;'."
\t}\n
\tprotected function structureUpInsert(" . '$request' . "): array
\t{
\t\t".'$fields = array_keys($request);'."
\t\t".'return $this->filter_request($request, $fields);'."
\t}
}";
        if(!file_exists($path))
            $this->createfile("$path", $context);
        else
            $this->error('Repository com esse nome já existe.');
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $path = $this->argument('path');
        $explodedPath = explode('/', $path);
        $collectPath = collect($explodedPath);
        $namespacePath = "App\\Repositories\\".implode('\\', $explodedPath);
        $repoName = $collectPath->last()."Repository";
        $pathToRepo = app_path()."/Repositories/$path";
        $pathToContract = app_path()."/Repositories/Contracts";

        if(empty($path)){
            $this->error('Passe o nome da repository');
            return;
        }

        if(!is_dir($pathToRepo))
            mkdir($pathToRepo, 0755, true);

        $this->makeInterface("$pathToContract/I$repoName.php", $repoName);

        $this->makeRepository("$pathToRepo/$repoName.php", $repoName, $namespacePath);
    }
}
