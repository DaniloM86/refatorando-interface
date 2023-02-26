<?php
use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

/** ============ CONFIG DE ERROS E INSTÂNCIA DO SLIM =========================
    * @var responsável por definir as,
    * informações de erro e,
    * criar uma nova instância do slim,
**/
    $config['displayErrorDetails'] = true;
        $app = new App(['settings' => $config]);

/**  ====================== ROTAS DE GET ===================================
    * rota GET das cincos páginas views
    * @var Controllers das páginas .[html]
    * Caminho dos arquivos public/views/pages/...
**/
    $app->get('/','App\Controller\Pages\Home:getHome');
    $app->get('/home','App\Controller\Pages\Home:getHome');
    $app->get('/about','App\Controller\Pages\About:getAbout');
    $app->get('/create','App\Controller\Pages\Create:getCreate');

// renderiza o slim
    $app->run();
