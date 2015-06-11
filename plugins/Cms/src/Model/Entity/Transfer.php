<?php
namespace Cms\Model\Entity;

use Cake\ORM\Entity;

/**
 * Transfer Entity.
 */
class Transfer extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'attachment' => true,
        'name' => true,
        'type' => true,
        'user_id' => true,
        'status' => true,
        'user' => true,
    ];
}
