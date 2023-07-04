<?php

/**
 * Stiletto API
 * PHP version 7.3
 *
 * @package OpenAPIServer
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */

/**
 * API for [Stiletto Web](https://github.com/dm94/stiletto-web)
 * The version of the OpenAPI document: 2.9.0
 * Contact: dm94official@hotmail.es
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */
namespace OpenAPIServer\Api;

use Psr\Container\ContainerInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Exception\HttpNotImplementedException;

/**
 * AbstractUsersApi Class Doc Comment
 *
 * @package OpenAPIServer\Api
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */
abstract class AbstractUsersApi
{

    /**
     * @var ContainerInterface|null Slim app container instance
     */
    protected $container;

    /**
     * Route Controller constructor receives container
     *
     * @param ContainerInterface|null $container Slim app container instance
     */
    public function __construct(ContainerInterface $container = null)
    {
        $this->container = $container;
    }


    /**
     * PUT addNick
     * Summary: addNick
     * Notes: Update a user&#39;s game name
     * Output-Formats: [application/json]
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     * @param array|null             $args     Path arguments
     *
     * @return ResponseInterface
     * @throws HttpNotImplementedException to force implementation class to override this method
     */
    public function addNick(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $discordid = $args['discordid'];
        $queryParams = $request->getQueryParams();
        $dataupdate = (key_exists('dataupdate', $queryParams)) ? $queryParams['dataupdate'] : null;
        $message = "How about implementing addNick as a PUT method in OpenAPIServer\Api\UsersApi class?";
        throw new HttpNotImplementedException($request, $message);
    }

    /**
     * POST authDiscord
     * Summary: authDiscord
     * Notes: To create a new account with discord
     * Output-Formats: [application/json]
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     * @param array|null             $args     Path arguments
     *
     * @return ResponseInterface
     * @throws HttpNotImplementedException to force implementation class to override this method
     */
    public function authDiscord(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $queryParams = $request->getQueryParams();
        $code = (key_exists('code', $queryParams)) ? $queryParams['code'] : null;
        $message = "How about implementing authDiscord as a POST method in OpenAPIServer\Api\UsersApi class?";
        throw new HttpNotImplementedException($request, $message);
    }

    /**
     * DELETE deleteUser
     * Summary: deleteUser
     * Notes: Delete the user
     * Output-Formats: [application/json]
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     * @param array|null             $args     Path arguments
     *
     * @return ResponseInterface
     * @throws HttpNotImplementedException to force implementation class to override this method
     */
    public function deleteUser(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $discordid = $args['discordid'];
        $message = "How about implementing deleteUser as a DELETE method in OpenAPIServer\Api\UsersApi class?";
        throw new HttpNotImplementedException($request, $message);
    }

    /**
     * GET getUser
     * Summary: getUser
     * Notes: Returns a user&#39;s information
     * Output-Formats: [application/json]
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     * @param array|null             $args     Path arguments
     *
     * @return ResponseInterface
     * @throws HttpNotImplementedException to force implementation class to override this method
     */
    public function getUser(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $message = "How about implementing getUser as a GET method in OpenAPIServer\Api\UsersApi class?";
        throw new HttpNotImplementedException($request, $message);
    }
}
