<?php

namespace Modules;

use Illuminate\Support\ServiceProvider;
use Modules\ModuleNameInterface;
class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    //  public function __construct(ModuleNameInterface $moduleName)
    // {
    //     $this->moduleName = $moduleName;
    // }

    public function register()
    {
        $modules = [
            'Products',
            'News',
            // Thêm các module khác vào đây
        ];
        
        foreach ($modules as $module) {
            $this->loadViewsFrom(__DIR__.'/'.$module."/Resources/views", $module);

            $routesPath = __DIR__.'/'.$module."/routes/web.php";
            if (file_exists($routesPath)) {
                $this->loadRoutesFrom($routesPath);
                // echo $routesPath;
                // die();
            }
            // $this->loadRoutesFrom(__DIR__.'/'.$module."/routes/web.php");
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
