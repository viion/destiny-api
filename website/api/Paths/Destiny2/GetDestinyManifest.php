<?php

namespace Destiny2\Api\Destiny2;

/**
 * Returns the current version of the manifest as a json object.
 */
class GetDestinyManifest
{
    const NAME           = 'Destiny2.GetDestinyManifest';
    const URI            = '/Destiny2/Manifest/';
    const METHOD         = 'GET';
    const TAGS           = 'Destiny2';
    const OPERATION_ID   = 'Destiny2.GetDestinyManifest';

    const IS_PREVIEW     = false;
    const IS_DEPRECATED  = false;

    const PARAMETERS = [
        
    ];

    const RESPONSE = [
        200 => '#/components/responses/Destiny.Config.DestinyManifest'
    ];

    public static function build()
    {

    }
}
