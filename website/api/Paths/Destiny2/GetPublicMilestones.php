<?php

namespace Destiny2\Api\Paths\Destiny2;

/**
 * GetPublicMilestones
 *
 * Gets public information about currently available Milestones.
 */
class GetPublicMilestones
{

    const NAME = 'Destiny2.GetPublicMilestones';

    const URI = '/Destiny2/Milestones/';

    const METHOD = 'GET';

    const TAGS = [
        'Destiny2',
    ];

    const OPERATION_ID = 'Destiny2.GetPublicMilestones';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/DictionaryOfuint32AndDestinyPublicMilestone',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

