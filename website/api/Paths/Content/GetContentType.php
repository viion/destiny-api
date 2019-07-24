<?php

namespace Destiny2\Api\Content;

/**
 * Gets an object describing a particular variant of content.
 */
class GetContentType
{
    const NAME           = 'Content.GetContentType';
    const URI            = '/Content/GetContentType/{type}/';
    const METHOD         = 'GET';
    const TAGS           = 'Content';
    const OPERATION_ID   = 'Content.GetContentType';

    const IS_PREVIEW     = false;
    const IS_DEPRECATED  = false;

    const PARAMETERS = [
        
    ];

    const RESPONSE = [
        200 => '#/components/responses/Content.Models.ContentTypeDescription'
    ];

    public static function build()
    {

    }
}
