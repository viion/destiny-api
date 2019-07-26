<?php

namespace Destiny2\Api\Paths\Destiny2\GetCharacter;

/**
 * GetCharacter
 *
 * Returns character information for the supplied character.
 */
class GetCharacter
{

    const SUMMARY = 'Destiny2.GetCharacter';

    const URI = '/Destiny2/{membershipType}/Profile/{destinyMembershipId}/Character/{characterId}/';

    const METHOD = 'GET';

    const TAGS = [
        'Destiny2',
    ];

    const OPERATION_ID = 'Destiny2.GetCharacter';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/Destiny.Responses.DestinyCharacterResponse',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

