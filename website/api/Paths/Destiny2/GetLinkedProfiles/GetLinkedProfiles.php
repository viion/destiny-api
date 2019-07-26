<?php

namespace Destiny2\Api\Paths\Destiny2\GetLinkedProfiles;

/**
 * GetLinkedProfiles
 *
 * Returns a summary information about all profiles linked to the requesting
 * membership type/membership ID that have valid Destiny information. The passed-in
 * Membership Type/Membership ID may be a Bungie.Net membership or a Destiny
 * membership. It only returns the minimal amount of data to begin making more
 * substantive requests, but will hopefully serve as a useful alternative to
 * UserServices for people who just care about Destiny data. Note that it will only
 * return linked accounts whose linkages you are allowed to view.
 */
class GetLinkedProfiles
{

    const SUMMARY = 'Destiny2.GetLinkedProfiles';

    const URI = '/Destiny2/{membershipType}/Profile/{membershipId}/LinkedProfiles/';

    const METHOD = 'GET';

    const TAGS = [
        'Destiny2',
    ];

    const OPERATION_ID = 'Destiny2.GetLinkedProfiles';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/Destiny.Responses.DestinyLinkedProfilesResponse',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

