<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.Reporting.DestinyReportReasonDefinition
 */
class Definitions.Reporting.DestinyReportReasonDefinition
{

    const NAME = 'Destiny.Definitions.Reporting.DestinyReportReasonDefinition';

    const TYPE = 'object';

    public $reasonHash = [
        'type' => 'integer',
        'description' => 'The identifier for the reason: they are only guaranteed unique under the Category in which they are found.',
        'format' => 'uint32',
    ];

    public $displayProperties = [
        '$ref' => '#/components/schemas/Destiny.Definitions.Common.DestinyDisplayPropertiesDefinition',
    ];


}

