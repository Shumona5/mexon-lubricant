<?php

namespace App\Console\Commands;

use App\Models\Module;
use App\Models\Permission;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class CreatePermission extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'permission:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get all routes name from web.php and store it into permissions table.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // $routeArray=getAllRoutesInArray();
        // foreach ($routeArray as $key=>$item) {
        //     $moduleId=$this->createModule($key);
        //     $this->createPermissions($moduleId,$item);
        // }

        $routes = \Route::getRoutes();

        foreach ($routes as $route) {
            if (!in_array($route->getPrefix(), ['_ignition', '_debugbar', '', 'api','sanctum'])) {
                if ($route->getName() != '') {
                    $moduleSlug = str_replace('/', '', $route->getPrefix());
                    $moduleName = str_replace('/', '', $route->getPrefix());
                    $routeName = $route->getName();
                    $routeDisplayName = ucfirst(str_replace('.', ' ', $routeName));

                    // Check if the module already exists, if not, create it.
                    $module = Module::where('slug', $moduleSlug)->first();

                    if (!$module) {
                        $module = Module::create([
                            'slug' => strtolower($moduleSlug),
                            'name' => $moduleName,
                        ]);
                    }

                    // Check if the permission already exists, if not, create it.
                    $permission = Permission::where('slug', $routeName)->first();

                    if (!$permission) {
                        Permission::create([
                            'module_id' => $module->id,
                            'slug' => $routeName,
                            'name' => $routeDisplayName,
                        ]);
                    }
                }
            }
        }

        $this->info(sprintf('All permission has been created.'));
        return 0;
    }

    public function createModule($moduleName)
    {
        $moduleId = Module::updateOrCreate([
            'name' => str_replace('/', '', $moduleName),
            'slug' => Str::slug($moduleName)
        ]);
        return $moduleId->id;
    }

    public function createPermissions($module_id, $permissions)
    {
        foreach ($permissions as $key => $permission) {
            Permission::updateOrCreate([
                'module_id' => $module_id,
                'name' => $permission['name'],
                'slug' => $permission['name'],
            ]);
        }
    }
}
