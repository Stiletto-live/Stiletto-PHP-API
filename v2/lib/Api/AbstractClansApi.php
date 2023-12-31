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
 * AbstractClansApi Class Doc Comment
 *
 * @package OpenAPIServer\Api
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */
abstract class AbstractClansApi
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
     * POST createClan
     * Summary: To create a new clan
     * Notes: To create a clan. The values of clancolor and clandiscord can be null
     * Output-Formats: [application/json]
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     * @param array|null             $args     Path arguments
     *
     * @return ResponseInterface
     * @throws HttpNotImplementedException to force implementation class to override this method
     */
    public function createClan(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $queryParams = $request->getQueryParams();
        $clanname = (key_exists('clanname', $queryParams)) ? $queryParams['clanname'] : null;
        $clancolor = (key_exists('clancolor', $queryParams)) ? $queryParams['clancolor'] : null;
        $clandiscord = (key_exists('clandiscord', $queryParams)) ? $queryParams['clandiscord'] : null;
        $message = "How about implementing createClan as a POST method in OpenAPIServer\Api\ClansApi class?";
        throw new HttpNotImplementedException($request, $message);
    }

    /**
     * POST createRelationship
     * Summary: To create new relationships
     * Notes: Type of relationship. 0 PNA, 1 Ally, 2 Enemy, 30 False PNA, 31 False Ally, 32 False War
     * Output-Formats: [application/json]
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     * @param array|null             $args     Path arguments
     *
     * @return ResponseInterface
     * @throws HttpNotImplementedException to force implementation class to override this method
     */
    public function createRelationship(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $clanId = $args['clanId'];
        $queryParams = $request->getQueryParams();
        $typed = (key_exists('typed', $queryParams)) ? $queryParams['typed'] : null;
        $clanflag = (key_exists('clanflag', $queryParams)) ? $queryParams['clanflag'] : null;
        $nameotherclan = (key_exists('nameotherclan', $queryParams)) ? $queryParams['nameotherclan'] : null;
        $symbol = (key_exists('symbol', $queryParams)) ? $queryParams['symbol'] : null;
        $message = "How about implementing createRelationship as a POST method in OpenAPIServer\Api\ClansApi class?";
        throw new HttpNotImplementedException($request, $message);
    }

    /**
     * DELETE deleteClan
     * Summary: Delete the clan, only the leader can be delete the clan
     * Notes: Delete a clan. It is necessary to be the leader of the clan in order to perform this action
     * Output-Formats: [application/json]
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     * @param array|null             $args     Path arguments
     *
     * @return ResponseInterface
     * @throws HttpNotImplementedException to force implementation class to override this method
     */
    public function deleteClan(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $clanId = $args['clanId'];
        $message = "How about implementing deleteClan as a DELETE method in OpenAPIServer\Api\ClansApi class?";
        throw new HttpNotImplementedException($request, $message);
    }

    /**
     * DELETE deleteRelationship
     * Summary: Delete the indicated relationship
     * Notes: It erases a diplomatic relationship. In case of war the other clan has to accept it. Only the clan leader can perform this action
     * Output-Formats: [application/json]
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     * @param array|null             $args     Path arguments
     *
     * @return ResponseInterface
     * @throws HttpNotImplementedException to force implementation class to override this method
     */
    public function deleteRelationship(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $clanId = $args['clanId'];
        $id = $args['id'];
        $message = "How about implementing deleteRelationship as a DELETE method in OpenAPIServer\Api\ClansApi class?";
        throw new HttpNotImplementedException($request, $message);
    }

    /**
     * GET getClanInfo
     * Summary: Return the information of the clan members
     * Notes: Returns basic clan information
     * Output-Formats: [application/json]
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     * @param array|null             $args     Path arguments
     *
     * @return ResponseInterface
     * @throws HttpNotImplementedException to force implementation class to override this method
     */
    public function getClanInfo(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $clanId = $args['clanId'];
        $message = "How about implementing getClanInfo as a GET method in OpenAPIServer\Api\ClansApi class?";
        throw new HttpNotImplementedException($request, $message);
    }

    /**
     * GET getClans
     * Summary: Return the list of clans
     * Notes: Return the list of clans
     * Output-Formats: [application/json]
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     * @param array|null             $args     Path arguments
     *
     * @return ResponseInterface
     * @throws HttpNotImplementedException to force implementation class to override this method
     */
    public function getClans(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $queryParams = $request->getQueryParams();
        $pageSize = (key_exists('pageSize', $queryParams)) ? $queryParams['pageSize'] : null;
        $page = (key_exists('page', $queryParams)) ? $queryParams['page'] : null;
        $message = "How about implementing getClans as a GET method in OpenAPIServer\Api\ClansApi class?";
        throw new HttpNotImplementedException($request, $message);
    }

    /**
     * GET getDiscordConfig
     * Summary: Get Discord Config
     * Notes: Return the bot configuration
     * Output-Formats: [application/json]
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     * @param array|null             $args     Path arguments
     *
     * @return ResponseInterface
     * @throws HttpNotImplementedException to force implementation class to override this method
     */
    public function getDiscordConfig(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $clanId = $args['clanId'];
        $message = "How about implementing getDiscordConfig as a GET method in OpenAPIServer\Api\ClansApi class?";
        throw new HttpNotImplementedException($request, $message);
    }

    /**
     * GET getMemberPermissions
     * Summary: getMemberPermissions
     * Notes: Return a clan member&#39;s permissions Only the clan leader and the clan member can use this endpoint.
     * Output-Formats: [application/json]
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     * @param array|null             $args     Path arguments
     *
     * @return ResponseInterface
     * @throws HttpNotImplementedException to force implementation class to override this method
     */
    public function getMemberPermissions(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $clanId = $args['clanId'];
        $memberid = $args['memberid'];
        $message = "How about implementing getMemberPermissions as a GET method in OpenAPIServer\Api\ClansApi class?";
        throw new HttpNotImplementedException($request, $message);
    }

    /**
     * GET getMembers
     * Summary: Return the information of the clan members
     * Notes: Returning Clan Members
     * Output-Formats: [application/json]
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     * @param array|null             $args     Path arguments
     *
     * @return ResponseInterface
     * @throws HttpNotImplementedException to force implementation class to override this method
     */
    public function getMembers(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $clanId = $args['clanId'];
        $message = "How about implementing getMembers as a GET method in OpenAPIServer\Api\ClansApi class?";
        throw new HttpNotImplementedException($request, $message);
    }

    /**
     * GET getRelationships
     * Summary: Return the list of relationships for the clan
     * Notes: Return the clan&#39;s diplomacy
     * Output-Formats: [application/json]
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     * @param array|null             $args     Path arguments
     *
     * @return ResponseInterface
     * @throws HttpNotImplementedException to force implementation class to override this method
     */
    public function getRelationships(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $clanId = $args['clanId'];
        $message = "How about implementing getRelationships as a GET method in OpenAPIServer\Api\ClansApi class?";
        throw new HttpNotImplementedException($request, $message);
    }

    /**
     * GET getRequests
     * Summary: Return the list of requests for entry to the clan
     * Notes: Returns pending applications for entry into a clan
     * Output-Formats: [application/json]
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     * @param array|null             $args     Path arguments
     *
     * @return ResponseInterface
     * @throws HttpNotImplementedException to force implementation class to override this method
     */
    public function getRequests(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $clanId = $args['clanId'];
        $message = "How about implementing getRequests as a GET method in OpenAPIServer\Api\ClansApi class?";
        throw new HttpNotImplementedException($request, $message);
    }

    /**
     * DELETE leaveClan
     * Summary: leaveClan
     * Notes: It is for the user to leave the clan.
     * Output-Formats: [application/json]
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     * @param array|null             $args     Path arguments
     *
     * @return ResponseInterface
     * @throws HttpNotImplementedException to force implementation class to override this method
     */
    public function leaveClan(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $message = "How about implementing leaveClan as a DELETE method in OpenAPIServer\Api\ClansApi class?";
        throw new HttpNotImplementedException($request, $message);
    }

    /**
     * POST sendRequest
     * Summary: To send an request to the clan
     * Notes: Add a clan application, it can only be done if you are not in a clan
     * Output-Formats: [application/json]
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     * @param array|null             $args     Path arguments
     *
     * @return ResponseInterface
     * @throws HttpNotImplementedException to force implementation class to override this method
     */
    public function sendRequest(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $clanId = $args['clanId'];
        $queryParams = $request->getQueryParams();
        $discordid = (key_exists('discordid', $queryParams)) ? $queryParams['discordid'] : null;
        $message = "How about implementing sendRequest as a POST method in OpenAPIServer\Api\ClansApi class?";
        throw new HttpNotImplementedException($request, $message);
    }

    /**
     * PUT updateBotConfig
     * Summary: Update Bot Config
     * Notes: Update the bot configuration
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     * @param array|null             $args     Path arguments
     *
     * @return ResponseInterface
     * @throws HttpNotImplementedException to force implementation class to override this method
     */
    public function updateBotConfig(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $clanId = $args['clanId'];
        $queryParams = $request->getQueryParams();
        $languaje = (key_exists('languaje', $queryParams)) ? $queryParams['languaje'] : null;
        $clanlog = (key_exists('clanlog', $queryParams)) ? $queryParams['clanlog'] : null;
        $kick = (key_exists('kick', $queryParams)) ? $queryParams['kick'] : null;
        $readypvp = (key_exists('readypvp', $queryParams)) ? $queryParams['readypvp'] : null;
        $walkeralarm = (key_exists('walkeralarm', $queryParams)) ? $queryParams['walkeralarm'] : null;
        $message = "How about implementing updateBotConfig as a PUT method in OpenAPIServer\Api\ClansApi class?";
        throw new HttpNotImplementedException($request, $message);
    }

    /**
     * PUT updateClan
     * Summary: Update Clan
     * Notes: To update the clan. Only the leader can use this endpoint
     * Output-Formats: [application/json]
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     * @param array|null             $args     Path arguments
     *
     * @return ResponseInterface
     * @throws HttpNotImplementedException to force implementation class to override this method
     */
    public function updateClan(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $clanId = $args['clanId'];
        $queryParams = $request->getQueryParams();
        $clanname = (key_exists('clanname', $queryParams)) ? $queryParams['clanname'] : null;
        $clancolor = (key_exists('clancolor', $queryParams)) ? $queryParams['clancolor'] : null;
        $clandiscord = (key_exists('clandiscord', $queryParams)) ? $queryParams['clandiscord'] : null;
        $symbol = (key_exists('symbol', $queryParams)) ? $queryParams['symbol'] : null;
        $message = "How about implementing updateClan as a PUT method in OpenAPIServer\Api\ClansApi class?";
        throw new HttpNotImplementedException($request, $message);
    }

    /**
     * PUT updateMember
     * Summary: To perform the actions of kick from the clan or changing the clan leader. Only leaders can use these options
     * Notes: Update a member&#39;s information. You can kick out or pass on leadership to a member. Only the clan leader can perform these actions
     * Output-Formats: [application/json]
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     * @param array|null             $args     Path arguments
     *
     * @return ResponseInterface
     * @throws HttpNotImplementedException to force implementation class to override this method
     */
    public function updateMember(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $clanId = $args['clanId'];
        $memberid = $args['memberid'];
        $queryParams = $request->getQueryParams();
        $accion = (key_exists('accion', $queryParams)) ? $queryParams['accion'] : null;
        $message = "How about implementing updateMember as a PUT method in OpenAPIServer\Api\ClansApi class?";
        throw new HttpNotImplementedException($request, $message);
    }

    /**
     * PUT updateMemberPermissions
     * Summary: updateMemberPermissions
     * Notes: Only the leader can perform this action
     * Output-Formats: [application/json]
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     * @param array|null             $args     Path arguments
     *
     * @return ResponseInterface
     * @throws HttpNotImplementedException to force implementation class to override this method
     */
    public function updateMemberPermissions(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $clanId = $args['clanId'];
        $memberid = $args['memberid'];
        $queryParams = $request->getQueryParams();
        $request = (key_exists('request', $queryParams)) ? $queryParams['request'] : null;
        $kickmembers = (key_exists('kickmembers', $queryParams)) ? $queryParams['kickmembers'] : null;
        $walkers = (key_exists('walkers', $queryParams)) ? $queryParams['walkers'] : null;
        $bot = (key_exists('bot', $queryParams)) ? $queryParams['bot'] : null;
        $diplomacy = (key_exists('diplomacy', $queryParams)) ? $queryParams['diplomacy'] : null;
        $message = "How about implementing updateMemberPermissions as a PUT method in OpenAPIServer\Api\ClansApi class?";
        throw new HttpNotImplementedException($request, $message);
    }

    /**
     * PUT updateRequest
     * Summary: To accept or reject the request
     * Notes: It serves to accept or reject an application for entry into a clan. Only the clan leader can accept or reject applications
     * Output-Formats: [application/json]
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     * @param array|null             $args     Path arguments
     *
     * @return ResponseInterface
     * @throws HttpNotImplementedException to force implementation class to override this method
     */
    public function updateRequest(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $clanId = $args['clanId'];
        $id = $args['id'];
        $queryParams = $request->getQueryParams();
        $accion = (key_exists('accion', $queryParams)) ? $queryParams['accion'] : null;
        $message = "How about implementing updateRequest as a PUT method in OpenAPIServer\Api\ClansApi class?";
        throw new HttpNotImplementedException($request, $message);
    }
}
