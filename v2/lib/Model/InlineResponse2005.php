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
 * InlineResponse2005
 *
 * @package OpenAPIServer\Model
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */
class InlineResponse2005 extends BaseModel
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
  "required" : [ "clan_limit", "crossplay", "name", "region" ],
  "type" : "object",
  "properties" : {
    "region" : {
      "minLength" : 1,
      "type" : "string"
    },
    "name" : {
      "minLength" : 1,
      "type" : "string"
    },
    "clan_limit" : {
      "type" : "integer"
    },
    "crossplay" : {
      "type" : "boolean"
    }
  }
}
SCHEMA;
}