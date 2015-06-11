<?php
namespace Cms\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pin Entity.
 */
class Pin extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'address' => true,
        'neighborhood' => true,
        'city' => true,
        'state' => true,
        'country' => true,
        'latitude' => true,
        'longitude' => true,
        'type' => true,
    ];
}
