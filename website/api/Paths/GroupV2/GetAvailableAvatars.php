<?php

namespace Destiny2\Api\GroupV2;

/**
 * Returns a list of all available group avatars for the signed-in user.
 */
class GetAvailableAvatars
{
    const NAME           = 'GroupV2.GetAvailableAvatars';
    const URI            = '/GroupV2/GetAvailableAvatars/';
    const METHOD         = 'GET';
    const TAGS           = 'GroupV2';
    const OPERATION_ID   = 'GroupV2.GetAvailableAvatars';

    const IS_PREVIEW     = false;
    const IS_DEPRECATED  = false;

    const PARAMETERS = [
        
    ];

    const RESPONSE = [
        200 => '#/components/responses/DictionaryOfint32Andstring'
    ];

    public static function build()
    {

    }
}
