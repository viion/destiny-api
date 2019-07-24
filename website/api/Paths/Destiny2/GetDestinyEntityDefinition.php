<?php

namespace Destiny2\Api\Destiny2;

/**
 * Returns the static definition of an entity of the given Type and hash
 * identifier. Examine the API Documentation for the Type Names of entities
 * that have their own definitions. Note that the return type will always
 * *inherit from* DestinyDefinition, but the specific type returned will be
 * the requested entity type if it can be found. Please don't use this as a
 * chatty alternative to the Manifest database if you require large sets of
 * data, but for simple and one-off accesses this should be handy.
 */
class GetDestinyEntityDefinition
{
    const NAME           = 'Destiny2.GetDestinyEntityDefinition';
    const URI            = '/Destiny2/Manifest/{entityType}/{hashIdentifier}/';
    const METHOD         = 'GET';
    const TAGS           = 'Destiny2';
    const OPERATION_ID   = 'Destiny2.GetDestinyEntityDefinition';

    const IS_PREVIEW     = false;
    const IS_DEPRECATED  = false;

    const PARAMETERS = [
        
    ];

    const RESPONSE = [
        200 => '#/components/responses/Destiny.Definitions.DestinyDefinition'
    ];

    public static function build()
    {

    }
}
