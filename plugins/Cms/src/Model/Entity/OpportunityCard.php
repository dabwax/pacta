<?php
namespace Cms\Model\Entity;

use Cake\ORM\Entity;

/**
 * OpportunityCard Entity.
 */
class OpportunityCard extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'email' => true,
        'date_of_accession' => true,
        'opportunity_id' => true,
        'opportunity' => true,
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
