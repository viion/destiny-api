<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\Reporting\DestinyReportReasonCategoryDefinition;

/**
 * DestinyReportReasonCategoryDefinition
 *
 * If you're going to report someone for a Terms of Service violation, you need to
 * choose a category and reason for the report. This definition holds both the
 * categories and the reasons within those categories, for simplicity and my own
 * laziness' sake.
 * Note tha this means that, to refer to a Reason by reasonHash, you need a
 * combination of the reasonHash *and* the associated ReasonCategory's hash: there
 * are some reasons defined under multiple categories.
 */
class DestinyReportReasonCategoryDefinition
{

    const TYPE = 'object';

    public $displayProperties = [
        '$ref' => '#/components/schemas/Destiny.Definitions.Common.DestinyDisplayPropertiesDefinition',
    ];

    public $reasons = [
        'type' => 'object',
        'additionalProperties' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Reporting.DestinyReportReasonDefinition',
        ],
        'description' => 'The specific reasons for the report under this category.',
        'x-dictionary-key' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
    ];

    public $hash = [
        'type' => 'integer',
        'description' => 'The unique identifier for this entity. Guaranteed to be unique for the type of entity, but not globally.
When entities refer to each other in Destiny content, it is this hash that they are referring to.',
        'format' => 'uint32',
    ];

    public $index = [
        'type' => 'integer',
        'description' => 'The index of the entity as it was found in the investment tables.',
        'format' => 'int32',
    ];

    public $redacted = [
        'type' => 'boolean',
        'description' => 'If this is true, then there is an entity with this identifier/type combination, but BNet is not yet allowed to show it. Sorry!',
    ];


}

