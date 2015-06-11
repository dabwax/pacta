<?php
namespace Cms\Model\Entity;

use Cake\ORM\Entity;

/**
 * Service Entity.
 */
class Service extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'content' => true,
        'tab_1_title' => true,
        'tab_1_content' => true,
        'tab_2_title' => true,
        'tab_2_content' => true,
    ];
}
