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
        'status' => true,
        'plan' => true,
    ];
}
