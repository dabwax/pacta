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
        'data' => true,
        'address' => true,
        'tag' => true,
    ];
}
