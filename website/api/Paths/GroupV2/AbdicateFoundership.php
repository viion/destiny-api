<?php

namespace Destiny2\Api\GroupV2;

/**
 * An administrative method to allow the founder of a group or clan to give up
 * their position to another admin permanently.
 */
class AbdicateFoundership
{
    const NAME           = 'GroupV2.AbdicateFoundership';
    const URI            = '/GroupV2/{groupId}/Admin/AbdicateFoundership/{membershipType}/{founderIdNew}/';
    const METHOD         = 'POST';
    const TAGS           = '{tags}';
    const OPERATION_ID   = '{operationId}';

    const IS_PREVIEW     = {is_preview};
    const IS_DEPRECATED  = {is_deprecated};

    const PARAMETERS = [
        
    ];

    const RESPONSE = [
        
    ];

    public static function build()
    {

    }
}
