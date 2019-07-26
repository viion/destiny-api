<?php

namespace Destiny2\Api\Paths\GroupV2\EditClanBanner;

/**
 * EditClanBanner
 *
 * Edit an existing group's clan banner. You must have suitable permissions in the
 * group to perform this operation. All fields are required.
 */
class EditClanBanner
{

    const SUMMARY = 'GroupV2.EditClanBanner';

    const URI = '/GroupV2/{groupId}/EditClanBanner/';

    const METHOD = 'POST';

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

