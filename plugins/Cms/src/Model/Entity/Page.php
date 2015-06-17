<?php
namespace Cms\Model\Entity;

use Cake\ORM\Entity;
use Cake\Utility\Inflector;

/**
 * Page Entity.
 */
class Page extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'content' => true,
        'slug' => true,
        'page_blocks' => true,
        'subname' => true,
    ];

    protected function _setName($title)
    {
        $this->set('slug', strtolower(Inflector::slug($title)));
        return $title;
    }
}
