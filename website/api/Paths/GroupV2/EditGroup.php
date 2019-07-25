<?php

namespace Destiny2\Api\Paths\GroupV2;

/**
 * EditGroup
 *
 * Edit an existing group. You must have suitable permissions in the group to
 * perform this operation. This latest revision will only edit the fields you pass
 * in - pass null for properties you want to leave unaltered.
 */
class EditGroup
{

    const NAME = 'GroupV2.EditGroup';

    const URI = '/GroupV2/{groupId}/Edit/';

    const METHOD = 'POST';

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

