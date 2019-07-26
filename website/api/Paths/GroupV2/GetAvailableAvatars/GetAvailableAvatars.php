<?php

namespace Destiny2\Api\Paths\GroupV2\GetAvailableAvatars;

/**
 * GetAvailableAvatars
 *
 * Returns a list of all available group avatars for the signed-in user.
 */
class GetAvailableAvatars
{

    const SUMMARY = 'GroupV2.GetAvailableAvatars';

    const URI = '/GroupV2/GetAvailableAvatars/';

    const METHOD = 'GET';

    const TAGS = [
        'GroupV2',
    ];

    const OPERATION_ID = 'GroupV2.GetAvailableAvatars';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/DictionaryOfint32Andstring',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

