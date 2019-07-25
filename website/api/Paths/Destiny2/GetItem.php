<?php

namespace Destiny2\Api\Paths\Destiny2;

/**
 * GetItem
 *
 * Retrieve the details of an instanced Destiny Item. An instanced Destiny item is
 * one with an ItemInstanceId. Non-instanced items, such as materials, have no
 * useful instance-specific details and thus are not queryable here.
 */
class GetItem
{

    const NAME = 'Destiny2.GetItem';

    const URI = '/Destiny2/{membershipType}/Profile/{destinyMembershipId}/Item/{itemInstanceId}/';

    const METHOD = 'GET';

    const TAGS = [
        'Destiny2',
    ];

    const OPERATION_ID = 'Destiny2.GetItem';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/Destiny.Responses.DestinyItemResponse',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

