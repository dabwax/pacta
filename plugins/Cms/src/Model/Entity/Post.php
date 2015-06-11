<?php
namespace Cms\Model\Entity;

use Cake\ORM\Entity;
use Cake\Utility\Inflector;

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

    protected function _setTitle($title)
    {
        $this->set('slug', strtolower(Inflector::slug($title)));
        return $title;
    }

    protected function _getPublishedDate($field)
    {
        if(!empty($field) && is_object($field)) {
            $field = $field->format("d/m/Y");
        }

        return $field;
    }

    protected function _setPublishedDate($field)
    {
        if(is_string($field)) {
            $dateTime = \DateTime::createFromFormat("d/m/Y", $field);

            $field = $dateTime->format("Y-m-d");
        }

        return $field;
    }
}
