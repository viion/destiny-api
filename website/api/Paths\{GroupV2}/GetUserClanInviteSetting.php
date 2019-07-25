<?php

namespace Destiny2\Api\Paths\{GroupV2};

/**
 * Gets the state of the user's clan invite preferences for a particular
 * membership type - true if they wish to be invited to clans, false
 * otherwise.
 */
class GetUserClanInviteSetting
{
    const NAME           = 'GroupV2.GetUserClanInviteSetting';
    const URI            = '/GroupV2/GetUserClanInviteSetting/{mType}/';
    const METHOD         = 'GET';
    const TAGS           = 'GroupV2';
    const OPERATION_ID   = 'GroupV2.GetUserClanInviteSetting';

    const IS_PREVIEW     = false;
    const IS_DEPRECATED  = false;

    const PARAMETERS = [
        
    ];

    const RESPONSE = [
        200 => '#/components/responses/boolean'
    ];

    public static function build()
    {

    }
}
