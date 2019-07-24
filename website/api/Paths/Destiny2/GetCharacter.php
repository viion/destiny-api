<?php

namespace Destiny2\Api\Destiny2;

/**
 * Returns character information for the supplied character.
 */
class GetCharacter
{
    const NAME           = 'Destiny2.GetCharacter';
    const URI            = '/Destiny2/{membershipType}/Profile/{destinyMembershipId}/Character/{characterId}/';
    const METHOD         = 'GET';
    const TAGS           = 'Destiny2';
    const OPERATION_ID   = 'Destiny2.GetCharacter';

    const IS_PREVIEW     = false;
    const IS_DEPRECATED  = false;

    const PARAMETERS = [
        
    ];

    const RESPONSE = [
        200 => '#/components/responses/Destiny.Responses.DestinyCharacterResponse'
    ];

    public static function build()
    {

    }
}
