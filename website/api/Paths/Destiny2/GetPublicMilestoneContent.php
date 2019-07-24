<?php

namespace Destiny2\Api\Destiny2;

/**
 * Gets custom localized content for the milestone of the given hash, if it
 * exists.
 */
class GetPublicMilestoneContent
{
    const NAME           = 'Destiny2.GetPublicMilestoneContent';
    const URI            = '/Destiny2/Milestones/{milestoneHash}/Content/';
    const METHOD         = 'GET';
    const TAGS           = 'Destiny2';
    const OPERATION_ID   = 'Destiny2.GetPublicMilestoneContent';

    const IS_PREVIEW     = false;
    const IS_DEPRECATED  = false;

    const PARAMETERS = [
        
    ];

    const RESPONSE = [
        200 => '#/components/responses/Destiny.Milestones.DestinyMilestoneContent'
    ];

    public static function build()
    {

    }
}
