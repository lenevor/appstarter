<?php 

define('LENEVOR_START', microtime(true));

/*
|---------------------------------------------------------------------------
| CHECK PLATAFORM REQUIREMENTS
|---------------------------------------------------------------------------
|
| This verification allows to know the version of the system and other 
| resources that PHP uses the framework.
|
*/

require __DIR__.'/../vendor/lenevor/syscodes/requeriments.php';

/*
|---------------------------------------------------------------------------
| REGISTER BOOTSTRAP CORE
|---------------------------------------------------------------------------
|
| Load bootstrap from the core of system. 
|
*/

require __DIR__.'/../vendor/lenevor/syscodes/bootstrap.php';

// Create the application
$app = new Syscodes\Core\Application(
    dirname(__DIR__)
);

$app->singleton(
    Syscodes\Contracts\Core\Lenevor::class, 
    Syscodes\Core\Http\Lenevor::class
);

$app->singleton(
    Syscodes\Contracts\Console\Application::class, 
    App\Console\Application::class
);

$app->singleton(
    Syscodes\Contracts\Debug\ExceptionHandler::class, 
    App\Exceptions\Handler::class
);

return $app;