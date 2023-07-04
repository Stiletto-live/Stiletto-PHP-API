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
 */
namespace OpenAPIServer\Model;

use OpenAPIServer\BaseModel;

/**
 * InlineResponse200
 *
 * @package OpenAPIServer\Model
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */
class InlineResponse200 extends BaseModel
{
    /**
     * @var string Models namespace.
     * Can be required for data deserialization when model contains referenced schemas.
     */
    protected const MODELS_NAMESPACE = '\OpenAPIServer\Model';

    /**
     * @var string Constant with OAS schema of current class.
     * Should be overwritten by inherited class.
     */
    protected const MODEL_SCHEMA = <<<'SCHEMA'
{
  "type" : "object",
  "properties" : {
    "discordid" : {
      "type" : "string",
      "description" : "Discord ID of the member",
      "example" : "000000000000000000"
    },
    "nickname" : {
      "type" : "string",
      "description" : "Name of the user in the game",
      "example" : "TEST USER"
    },
    "discordTag" : {
      "type" : "string",
      "description" : "Member discord tag",
      "example" : "DEMO#0000"
    },
    "leaderid" : {
      "type" : "string",
      "description" : "Discord ID of the clan leader",
      "example" : "000000000000000000"
    },
    "symbol" : {
      "type" : "string"
    }
  }
}
SCHEMA;
}
