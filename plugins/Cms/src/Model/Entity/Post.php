<?php
namespace Cms\Model\Entity;

use Cake\ORM\Entity;

/**
 * Post Entity.
 */
class Post extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'title' => true,
        'slug' => true,
        'description' => true,
        'excerpt' => true,
        'published_date' => true,
    ];
}
