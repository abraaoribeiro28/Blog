<?php

namespace App\Http\Traits;

trait PermissionTrait
{
    /**
     * Verifica se o usuário tem permissão de acessar a rota
     *
     * @param $permission
     */
    public function permission($permission) {
        $actions = ['index', 'create', 'edit', 'destroy'];
        foreach ($actions as $action) {
            $this->middleware(["can:$permission.$action"])->only($action);
        }
    }

}
