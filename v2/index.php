<?php
/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/
/**
 * Stiletto API
 * PHP version 7.2
 *
 * @package OpenAPIServer
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */

/**
 * API for [Stiletto Web](https://github.com/dm94/stiletto-web)
 * The version of the OpenAPI document: 2.0.0
 * Contact: dm94official@hotmail.es
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 */

require_once __DIR__ . '/vendor/autoload.php';

use OpenAPIServer\SlimRouter;
use OpenAPIServer\Mock\OpenApiDataMocker;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface;
use Slim\Routing\RouteCollectorProxy;
use Slim\Routing\RouteContext;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

// load config file
$config = [];
if (is_array($prodConfig = @include(__DIR__ . '/config/prod/config.inc.php'))) {
    $config = $prodConfig;
} elseif (is_array($devConfig = @include(__DIR__ . '/config/dev/config.inc.php'))) {
    $config = $devConfig;
} else {
    throw new InvalidArgumentException('Config file missed or broken.');
}

$router = new SlimRouter($config);
$app = $router->getSlimApp();

/**
 * The routing middleware should be added before the ErrorMiddleware
 * Otherwise exceptions thrown from it will not be handled
 */

// This middleware will append the response header Access-Control-Allow-Methods with all allowed methods
$app->add(function (Request $request, RequestHandlerInterface $handler): Response {
    $routeContext = RouteContext::fromRequest($request);
    $routingResults = $routeContext->getRoutingResults();
    $methods = $routingResults->getAllowedMethods();
    $requestHeaders = $request->getHeaderLine('Access-Control-Request-Headers');

    $response = $handler->handle($request);

    $response = $response->withHeader('Access-Control-Allow-Origin', '*');
    $response = $response->withHeader('Access-Control-Allow-Methods', implode(',', $methods));
    $response = $response->withHeader('Access-Control-Allow-Headers', $requestHeaders);
    $response = $response->withHeader('Access-Control-Allow-Credentials', 'true');
    $response = $response->withHeader('Content-type', 'application/json; charset=UTF-8');

    return $response;
});

$app->addRoutingMiddleware();

/**
 * Add Error Handling Middleware
 *
 * @param bool $displayErrorDetails -> Should be set to false in production
 * @param bool $logErrors -> Parameter is passed to the default ErrorHandler
 * @param bool $logErrorDetails -> Display error details in error log
 * which can be replaced by a callable of your choice.

 * Note: This middleware should be added last. It will not handle any exceptions/errors
 * for middleware added after it.
 */

$app->addErrorMiddleware(false,true,true);

$app->run();
