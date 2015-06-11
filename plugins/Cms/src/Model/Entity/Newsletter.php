<?php
namespace Cms\Model\Entity;

use Cake\ORM\Entity;

/**
 * Newsletter Entity.
 */
class Newsletter extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'email' => true,
        'ip_address' => true,
    ];
}
