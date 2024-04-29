<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Finder\Finder;
use Illuminate\Support\Str;

class GenerateRoutesFromBlade extends Command
    {
    protected $signature = 'generate:routes';
    protected $description = 'Generate routes from blade files';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $finder = new Finder();
        $routeNames = [];

        $finder->files()->in(resource_path('views'))->name('*.blade.php');

        foreach ($finder as $file) {
            $content = file_get_contents($file->getRealPath());

            preg_match_all('/route\([\'"]([^\'"]+)[\'"]\)/', $content, $matches);

            foreach ($matches[1] as $routeName) {
                $routeNames[] = $routeName;
            }
        }

        $routeNames = array_unique($routeNames);
        $controllerNames = [];

        foreach ($routeNames as $routeName) {
            if (strpos($routeName, '/') !== false) {
                $controllerName = Str::studly(Str::before($routeName, '/'));
            } else {
                $controllerName = Str::studly(Str::before($routeName, '-'));
            }
            

            $methodName = 'show' . Str::studly(str_replace('/', '_', $routeName)); // Replace '/' with '_'
            $controllerClass = $controllerName . 'Controller';
        
            // Store the controler name for later use
            $controllerNames[] = $controllerClass;
        
            // Generate th route definition
            $routeDefinition = "Route::get('/$routeName', [$controllerClass::class, '$methodName'])->name('$routeName');\n";
        
            // Pathto the web.php file
            $webFilePath = base_path('routes/web.php');
        
            // Append te route definition to web.php
            file_put_contents($webFilePath, $routeDefinition, FILE_APPEND);
        }
        
        // Remove dupicate controller names
        $controllerNames = array_unique($controllerNames);
        
        // Generate `us` statements
        $useStatements = "<?php\n\n";
        $useStatements .= "use Illuminate\\Support\\Facades\\Route;\n"; // Add the Route facade
        foreach ($controllerNames as $controllerName) {
            $useStatements .= "use App\\Http\\Controllers\\{$controllerName};\n";
        }
        
        // Read the eisting content of web.php
        $existingContent = file_get_contents($webFilePath);
        
        // Combine `use` statements and existing conent
        $newContent = $useStatements . "\n" . $existingContent;
        
        // Write toweb.php
        file_put_contents($webFilePath, $newContent);
                

        // TODO: Generate route definitions based on found route names
        // and append to the routes/web.php file. This part of the code
        // depends on your specific requirements and routing structure. (DOne , lsgooooooooooooooooooo)
        // niiiiiiiiiiiiiice

        return 0;
    }
}
