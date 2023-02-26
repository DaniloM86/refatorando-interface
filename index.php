<?php
try {
 // require file o autoload do composer
    $vendor = require __DIR__.'/vendor/autoload.php';
// require folder routes/aplications/routes.php
    $routes = require __DIR__.'/routes/routes.php';
    if (!isset($vendor) || !isset($routes)) {
        return false;
    }
        return true;
} catch (\Exception $e) {
    print "Error:Verifique a sua conexão com a internet.Tente novamente mais tarde".$e->getMessage();
}
