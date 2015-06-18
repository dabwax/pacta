<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PageBlock Entity.
 */
class PageBlock extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'content' => true,
        'page_id' => true,
        'position' => true,
        'page' => true,
    ];
}
