<?php

namespace Destiny2\Api\Destiny2;

/**
 * Gets public information about currently available Milestones.
 */
class GetPublicMilestones
{
    const NAME           = 'Destiny2.GetPublicMilestones';
    const URI            = '/Destiny2/Milestones/';
    const METHOD         = 'GET';
    const TAGS           = 'Destiny2';
    const OPERATION_ID   = 'Destiny2.GetPublicMilestones';

    const IS_PREVIEW     = false;
    const IS_DEPRECATED  = false;

    const PARAMETERS = [
        
    ];

    const RESPONSE = [
        200 => '#/components/responses/DictionaryOfuint32AndDestinyPublicMilestone'
    ];

    public static function build()
    {

    }
}
