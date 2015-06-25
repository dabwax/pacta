<?php
namespace Cms\Model\Entity;

use Cake\ORM\Entity;

/**
 * Affiliate Entity.
 */
class Affiliate extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'date_of_accession' => true,
        'plan_id' => true,
        'responsible_name' => true,
        'responsible_email' => true,
        'responsible_password' => true,
        'responsible_last_login' => true,
        'status' => true,
        'plan' => true,
    ];

    // accessor and mutators

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
