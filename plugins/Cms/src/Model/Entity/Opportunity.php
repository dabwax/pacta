<?php
namespace Cms\Model\Entity;

use Cake\ORM\Entity;

/**
 * Opportunity Entity.
 */
class Opportunity extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'role' => true,
        'local' => true,
        'city' => true,
        'state' => true,
        'country' => true,
        'date_of_accession' => true,
        'type' => true,
        'description' => true,
        'opportunity_cards' => true,
    ];

    protected function _getDateOfAccession($field)
    {
        if(!empty($field) && is_object($field)) {
            $field = $field->format("d/m/Y");
        }

        return $field;
    }

    protected function _setDateOfAccession($field)
    {
        if(is_string($field)) {
            $dateTime = \DateTime::createFromFormat("d/m/Y", $field);

            $field = $dateTime->format("Y-m-d");
        }

        return $field;
    }
}
