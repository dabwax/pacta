<?php
namespace Cms\Model\Entity;

use Cake\ORM\Entity;

/**
 * Plan Entity.
 */
class Plan extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'content' => true,
        'price' => true,
        'destaque_1' => true,
        'destaque_2' => true,
        'destaque_3' => true,
        'affiliates' => true,
        'contracts' => true,
    ];
}
