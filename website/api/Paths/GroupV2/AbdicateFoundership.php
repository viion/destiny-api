<?php

namespace Destiny2\Api\Paths\GroupV2;

/**
 * AbdicateFoundership
 *
 * An administrative method to allow the founder of a group or clan to give up
 * their position to another admin permanently.
 */
class AbdicateFoundership
{

    const NAME = 'GroupV2.AbdicateFoundership';

    const URI = '/GroupV2/{groupId}/Admin/AbdicateFoundership/{membershipType}/{founderIdNew}/';

    const METHOD = 'POST';

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

