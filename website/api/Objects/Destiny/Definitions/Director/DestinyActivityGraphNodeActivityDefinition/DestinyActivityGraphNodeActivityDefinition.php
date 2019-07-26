<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\Director\DestinyActivityGraphNodeActivityDefinition;

/**
 * DestinyActivityGraphNodeActivityDefinition
 *
 * The actual activity to be redirected to when you click on the node. Note that a
 * node can have many Activities attached to it: but only one will be active at any
 * given time. The list of Node Activities will be traversed, and the first one
 * found to be active will be displayed. This way, a node can layer multiple
 * variants of an activity on top of each other. For instance, one node can control
 * the weekly Crucible Playlist. There are multiple possible playlists, but only
 * one is active for the week.
 */
class DestinyActivityGraphNodeActivityDefinition
{

    const TYPE = 'object';

    public $nodeActivityId = [
        'type' => 'integer',
        'description' => 'An identifier for this node activity. It is only guaranteed to be unique within the Activity Graph.',
        'format' => 'uint32',
    ];

    public $activityHash = [
        'type' => 'integer',
        'description' => 'The activity that will be activated if the user clicks on this node. Controls all activity-related information displayed on the node if it is active (the text shown in the tooltip etc)',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyActivityDefinition',
        ],
    ];


}

