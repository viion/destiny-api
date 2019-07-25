<?php

namespace Destiny2\Api\Paths\GroupV2;

/**
 * EditFounderOptions
 *
 * Edit group options only available to a founder. You must have suitable
 * permissions in the group to perform this operation.
 */
class EditFounderOptions
{

    const NAME = 'GroupV2.EditFounderOptions';

    const URI = '/GroupV2/{groupId}/EditFounderOptions/';

    const METHOD = 'POST';

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

