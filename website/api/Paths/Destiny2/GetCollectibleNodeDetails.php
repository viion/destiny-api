<?php

namespace Destiny2\Api\Paths\Destiny2;

/**
 * GetCollectibleNodeDetails
 *
 * Given a Presentation Node that has Collectibles as direct descendants, this will
 * return item details about those descendants in the context of the requesting
 * character.
 */
class GetCollectibleNodeDetails
{

    const NAME = 'Destiny2.GetCollectibleNodeDetails';

    const URI = '/Destiny2/{membershipType}/Profile/{destinyMembershipId}/Character/{characterId}/Collectibles/{collectiblePresentationNodeHash}/';

    const METHOD = 'GET';

    const TAGS = [
        'Destiny2',
    ];

    const OPERATION_ID = 'Destiny2.GetCollectibleNodeDetails';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/Destiny.Responses.DestinyCollectibleNodeDetailResponse',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

