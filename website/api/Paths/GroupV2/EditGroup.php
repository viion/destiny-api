<?php

namespace Destiny2\Api\GroupV2;

/**
 * Edit an existing group. You must have suitable permissions in the group to
 * perform this operation. This latest revision will only edit the fields you
 * pass in - pass null for properties you want to leave unaltered.
 */
class EditGroup
{
    const NAME           = 'GroupV2.EditGroup';
    const URI            = '/GroupV2/{groupId}/Edit/';
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
