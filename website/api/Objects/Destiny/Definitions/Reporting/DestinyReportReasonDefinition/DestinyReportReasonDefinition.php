<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\Reporting\DestinyReportReasonDefinition;

/**
 * DestinyReportReasonDefinition
 *
 * A specific reason for being banned. Only accessible under the related category
 * (DestinyReportReasonCategoryDefinition) under which it is shown. Note that this
 * means that report reasons' reasonHash are not globally unique: and indeed,
 * entries like "Other" are defined under most categories for example.
 */
class DestinyReportReasonDefinition
{

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

