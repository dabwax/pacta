<?php
namespace Cms\Model\Entity;

use Cake\ORM\Entity;

/**
 * Opportunity Entity.
 */
class Opportunity extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'role' => true,
        'local' => true,
        'city' => true,
        'state' => true,
        'country' => true,
        'date' => true,
        'type' => true,
        'description' => true,
        'opportunity_cards' => true,
    ];
}
