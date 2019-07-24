<?php

namespace Destiny2\Api\Destiny2;

/**
 * Get currently available vendors from the list of vendors that can possibly
 * have rotating inventory. Note that this does not include things like
 * preview vendors and vendors-as-kiosks, neither of whom have
 * rotating/dynamic inventories. Use their definitions as-is for those.
 */
class GetVendors
{
    const NAME           = 'Destiny2.GetVendors';
    const URI            = '/Destiny2/{membershipType}/Profile/{destinyMembershipId}/Character/{characterId}/Vendors/';
    const METHOD         = 'GET';
    const TAGS           = 'Destiny2';
    const OPERATION_ID   = 'Destiny2.GetVendors';

    const IS_PREVIEW     = false;
    const IS_DEPRECATED  = false;

    const PARAMETERS = [
        
    ];

    const RESPONSE = [
        200 => '#/components/responses/Destiny.Responses.DestinyVendorsResponse'
    ];

    public static function build()
    {

    }
}
