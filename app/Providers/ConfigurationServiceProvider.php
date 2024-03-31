<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Admin\Configuration;

class ConfigurationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        try {
            $configurations = Configuration::whereNotIn('key',
                ['cor_principal', 'cor_titulos', 'cor_botoes', 'cor_fundo']
            )->get()->toArray();

            view()->composer([
                'components.portal.layout.header',
                'components.portal.layout.footer',
                'components.portal.includes.styles',
                'components.admin.layout.sidebar',
                'components.admin.includes.styles'
            ], function ($view) use ($configurations) {
                foreach ($configurations as $key => $value) {
                    $config[$value['key']] = $value['value'];
                }
                $view->with('configuration', $config);
            });
        } catch (\Throwable $th) {}
    }
}
