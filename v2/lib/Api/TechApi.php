<?php

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
 * The version of the OpenAPI document: 2.4.0
 * Contact: dm94official@hotmail.es
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

namespace OpenAPIServer\Api;

use Psr\Container\ContainerInterface;
use OpenAPIServer\Api\AbstractRecipesApi;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use \Slim\Http\Response as Response;
use PDO;
use OpenAPIServer\BDConnection;
use \MongoDB\Client as Mongo;

class TechApi extends AbstractTechApi
{

    /**
     * PUT addTech
     * Summary: Add tech
     * Notes: Adds the list of learned technologies to that user.
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     * @param array|null             $args     Path arguments
     *
     * @return ResponseInterface
     */
    public function addTech(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $discordid = $args['discordid'];
        $queryParams = $request->getQueryParams();
        $tree = (key_exists('tree', $queryParams)) ? $queryParams['tree'] : 'Vitamins';
        $body = $request->getParsedBody();

        $dataUser = $request->getAttribute('authenticated_user');
        if ($dataUser != null) {
            try {
                $client = new Mongo('mongodb+srv://'.$_ENV['MONGO_USERNAME'].':'.$_ENV['MONGO_PASSWORD'].'@'.$_ENV['MONGO_HOST']);
                $collection = $client->lastoasis->tech;

                $collection->updateOne(['discordtag' => $dataUser["discordtag"]], ['$set'=> [$tree =>$body]], ['upsert' => true]);

                $result = $collection->findOne(array('discordtag' => $dataUser["discordtag"]));

                $body = $response->getBody();
                $body->rewind();
                $body->write(json_encode($result));
                return $response->withStatus(200);
            } catch (Exception $e){
                return $response->withStatus(503);
            }
        }

        return $response->withStatus(401);
    }

    /**
     * GET getLearned
     * Notes: Give back what you have learned from that technology tree.
     * Output-Formats: [application/json]
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     * @param array|null             $args     Path arguments
     *
     * @return ResponseInterface
     */
    public function getLearned(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $discordid = $args['discordid'];
        $queryParams = $request->getQueryParams();
        $tree = (key_exists('tree', $queryParams)) ? $queryParams['tree'] : null;
        
        $dataUser = $request->getAttribute('authenticated_user');
        if ($dataUser != null) {
            try {
                $client = new Mongo('mongodb+srv://'.$_ENV['MONGO_USERNAME'].':'.$_ENV['MONGO_PASSWORD'].'@'.$_ENV['MONGO_HOST']);
                $collection = $client->lastoasis->tech;

                $result = $collection->findOne(array('discordtag' => $dataUser["discordtag"]));

                $body = $response->getBody();
                $body->rewind();
                $body->write(json_encode($result));
                return $response->withStatus(200);
            } catch (Exception $e){
                return $response->withStatus(503);
            }
        }

        return $response->withStatus(401);
    }

    /**
     * GET seeWhoHasLearntIt
     * Summary: Return members who have known a technology
     * Notes: Returns all clan members who have learned that technology
     * Output-Formats: [application/json]
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     * @param array|null             $args     Path arguments
     *
     * @return ResponseInterface
     */
    public function seeWhoHasLearntIt(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $clanid = $args['clanid'];
        $queryParams = $request->getQueryParams();
        $tree = (key_exists('tree', $queryParams)) ? $queryParams['tree'] : 'Vitamins';
        $tech = (key_exists('tech', $queryParams)) ? $queryParams['tech'] : 'Desert Mule';
        $users = [];

        $dataUser = $request->getAttribute('authenticated_user');
        if ($dataUser != null) {

            try {
                if ($dataUser["clanid"] == null) {
                    return $response->withStatus(405);
                }

                $connection = new BDConnection();
                $dbh = $connection->getCon();

                $stmt = $dbh->prepare("select discordTag from users where clanid=:clanid");
                $stmt->bindParam(':clanid', $dataUser["clanid"]);
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                $stmt->execute();
                if ($stmt->rowCount() > 0) {
                    while ($row = $stmt->fetch()){
                        array_push($users, $row['discordTag']);
                    }
                }
            } catch (PDOException $e){
                return $response->withStatus(503);
            }


            try {
                $client = new Mongo('mongodb+srv://'.$_ENV['MONGO_USERNAME'].':'.$_ENV['MONGO_PASSWORD'].'@'.$_ENV['MONGO_HOST']);
                $collection = $client->lastoasis->tech;
                $result = $collection->find(['discordtag' => array('$in' => $users), $tree => $tech], ['projection' => ['_id' => 0, 'discordtag' => 1]])->toArray();

                $body = $response->getBody();
                $body->rewind();
                $body->write(json_encode($result));
                return $response->withStatus(200);
            } catch (Exception $e){
                return $response->withStatus(503);
            }

            return $response->withStatus(200);
        }
        return $response->withStatus(401);
    }
}