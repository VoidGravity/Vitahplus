<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Symfony\Component\DomCrawler\Crawler;

class GenerateResourceControllers extends Command
{
    protected $signature = 'generate:controller-r';
    protected $description = 'Generate resource controllers based on web routes';

    public function handle()
    {
        $webFilePath = base_path('routes/web.php');
        $webFileContent = file_get_contents($webFilePath);

        $routes = $this->parseRoutes($webFileContent);

        foreach ($routes as $route) {
            $controllerName = ucfirst(Str::camel($route['controller']));
            $controllerPath = app_path("Http/Controllers/{$controllerName}.php");

            if (!file_exists($controllerPath)) {
                $this->call('make:controller', [
                    'name' => $controllerName,
                    '--resource' => true,
                ]);
            }

            $this->addOrUpdateControllerMethods($controllerPath, $route);
        }

        $this->info('Resource controllers have been generated/updated successfully.');
    }

    private function parseRoutes($webFileContent)
    {
        $routes = [];
        $pattern = "/Route::get\(['\"](.+)['\"], \[(.+)::class, '(.+)'\]\)->name\(['\"](.+)['\"]\);/";

        if (preg_match_all($pattern, $webFileContent, $matches, PREG_SET_ORDER)) {
            foreach ($matches as $match) {
                if (count($match) === 5) {
                    $routes[] = [
                        'uri' => $match[1],
                        'controller' => $match[2],
                        'method' => $match[3],
                        'name' => $match[4],
                    ];
                }
            }
        }

        return $routes;
    }



    private function addOrUpdateControllerMethods($controllerPath, $route)
    {
        $controllerContent = file_get_contents($controllerPath);

        $methodName = $route['method'];
        $viewName = $route['name'];

        $methodCode = "\n    public function $methodName()\n    {\n        return view('$viewName');\n    }\n";

        if (strpos($controllerContent, "function $methodName") === false) {
            $lastBracePos = strrpos($controllerContent, '}');

            if ($lastBracePos !== false) {
                $controllerContent = substr_replace($controllerContent, $methodCode, $lastBracePos, 0);
            }
        } else {
        }

        file_put_contents($controllerPath, $controllerContent);
        //// finnnalllyyy done , 
        // task : next make it into a package 
    }
}
