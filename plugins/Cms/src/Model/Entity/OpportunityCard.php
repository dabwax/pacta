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
        'date' => true,
        'opportunity_id' => true,
        'opportunity' => true,
    ];
}
